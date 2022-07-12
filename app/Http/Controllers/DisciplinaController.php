<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
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
        $disciplinas = Disciplina::all();
        return response()->json($disciplinas);
    }

    public function show($id)
    {
        $disciplina = Disciplina::find($id);
        return response()->json($disciplina);
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'turma_id' => 'required',
            'professor_id' => 'required',
        ]);

        $disciplina = new Disciplina();
        $disciplina->name = $request->input('email');
        $disciplina->turma_id = $request->input('turma_id');
        $disciplina->professor_id = $request->input('professor_id');

        $disciplina->save();

        return response()->json($disciplina);
    }

    public function update(Request $request, $id)
    {
        $disciplina = Disciplina::find($id);

        $disciplina->name = $request->name;
        $disciplina->turma_id = $request->turma_id;
        $disciplina->professor_id = $request->professor_id;

        $disciplina->save();

        return response()->json($disciplina);

    }

    public function delete($id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->delete();

        return response()->json("Disciplina deleted!");
    }
}
