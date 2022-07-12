<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'api_key' => 'nullable|date',

        ]);

        $admin = new Admin();
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->name = $request->input('name');

        $admin->save();

        return response()->json($admin);

    }

    public function authenticate(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = Admin::where('email', $request->input('email'))->first();

        if (is_null($user)) {
            return response()->json(['error' => 'Unauthorized'], 401, ['X-Header-One' => 'Header Value']);
        }

        if (Hash::check($request->input('password'), $user->password)) {
            $apikey = base64_encode(Str::random(40));
            Admin::where('email', $request->input('email'))->update(['api_key' => "$apikey"]);;
            return response()->json(['status' => 'success', 'api_key' => $apikey]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }
}
