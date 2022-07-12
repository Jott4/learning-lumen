<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlunoController extends Controller
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
        $alunos = Aluno::all();

        return response()->json($alunos);

    }

    public function show($id)
    {
        $aluno = Aluno::find($id);
        return response()->json($aluno);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'turma_id' => 'required'
        ]);

        $aluno = new Aluno();
        $aluno->email = $request->input('email');
        $aluno->phone = $request->input('phone');
        $aluno->password = Hash::make($request->input('password'));
        $aluno->name = $request->input('name');
        $aluno->turma_id = $request->input('turma_id');

        $aluno->save();

        return response()->json($aluno);
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $aluno->name = $request->name;
        $aluno->phone = $request->phone;
        $aluno->email = $request->email;
        $aluno->turma_id = $request->turma_id;

        $aluno->save();

        return response()->json($aluno);

    }

    public function delete($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();

        return response()->json($aluno);
    }
}
