<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get("/", function () {
    return view('index');
});

$router->get("/admin", function () {
    return view('adm.login');
});

$router->get("/professor", function () {
    return view('professor.login');
});

$router->get("/aluno", function () {
    return view('estudante.login');
});


$router->post('/login', 'AdminController@authenticate');
$router->post('/admin', 'AdminController@create');


$router->get('/professores', 'ProfessorController@index');
$router->get('/professores/{id}', 'ProfessorController@show');
$router->post('/professores', 'ProfessorController@create');
$router->put('/professores/{id}', 'ProfessorController@update');
$router->delete('/professores/{id}', 'ProfessorController@delete');


$router->get('/alunos', 'AlunoController@index');
$router->get('/alunos/{id}', 'AlunoController@show');
$router->post('/alunos', 'AlunoController@create');
$router->put('/alunos/{id}', 'AlunoController@update');
$router->delete('/alunos/{id}', 'AlunoController@delete');


$router->get('/cursos', 'CursoController@index');
$router->get('/cursos/{id}', 'CursoController@show');
$router->post('/cursos', 'CursoController@create');
$router->put('/cursos/{id}', 'CursoController@update');
$router->delete('/cursos/{id}', 'CursoController@delete');


$router->get('/turmas', 'TurmaController@index');
$router->get('/turmas/{id}', 'TurmaController@show');
$router->post('/turmas', 'TurmaController@create');
$router->put('/turmas/{id}', 'TurmaController@update');
$router->delete('/turmas/{id}', 'TurmaController@delete');



