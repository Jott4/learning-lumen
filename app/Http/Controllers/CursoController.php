<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
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
        $curso = Curso::all();
        return response()->json($curso);
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return response()->json($curso);
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'area' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->input('name');
        $curso->area = $request->input('area');

        $curso->save();

        return response()->json($curso);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);

        $curso->name = $request->name;
        $curso->area = $request->area;

        $curso->save();

        return response()->json($curso);

    }

    public function delete($id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return response()->json("Curso deleted!");
    }
}
