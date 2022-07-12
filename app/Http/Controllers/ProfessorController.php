<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        $professores = Professor::all();

        return response()->json($professores);

    }

    public function show($id)
    {
        $professor = Professor::find($id);
        return response()->json($professor);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $professor = new Professor();
        $professor->email = $request->input('email');
        $professor->password = Hash::make($request->input('password'));
        $professor->name = $request->input('name');

        $professor->save();

        return response()->json($professor);
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::find($id);

        $professor->name = $request->name;
        $professor->email = $request->email;

        $professor->save();

        return response()->json($professor);

    }

    public function delete($id)
    {
        $professor = Professor::find($id);
        $professor->delete();

        return response()->json("Professor deleted!");
    }
}
