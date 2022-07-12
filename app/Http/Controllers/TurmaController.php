<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
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
        $turma = Turma::all();
        return response()->json($turma);
    }

    public function show($id)
    {
        $turma = Turma::find($id);
        return response()->json($turma);
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'curso_id' => 'required'

        ]);

        $turma = new Turma();
        $turma->name = $request->input('name');
        $turma->curso_id = $request->input('curso_id');

        $turma->save();

        return response()->json($turma);
    }

    public function update(Request $request, $id)
    {
        $turma = Turma::find($id);

        $turma->name = $request->name;
        $turma->curso_id = $request->curso_id;

        $turma->save();

        return response()->json($turma);

    }

    public function delete($id)
    {
        $turma = Turma::find($id);
        $turma->delete();

        return response()->json("Turma deleted!");
    }
}
