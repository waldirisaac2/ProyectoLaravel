<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Authorization,Origin, Content-Type, X-Auth-Token, X-XSRF-TOKEN');

Route::group([

    'middleware' => 'api',
    // 'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@index');
    Route::get('usuario', 'AuthController@me');


    Route::get('json-api', "medio@index");


    Route::get('egresado', 'EgresadoController@index');
    Route::get('egresado/{egresado_id}', 'EgresadoController@show');
    Route::post('egresado', 'EgresadoController@create');
    Route::put('egresado/{egresado_id}', 'EgresadoController@update');
    Route::delete('egresado/{egresado_id}', 'EgresadoController@destroy');


    Route::get('escuela', 'EscuelaController@index');
    Route::get('escuela/{escuela_profesional_id}', 'escuelaController@show');
    Route::post('escuela', 'escuelaController@create');
    Route::put('escuela/{escuela_profesional_id}', 'escuelaController@update');
    Route::delete('escuela/{escuela_profesional_id}', 'escuelaController@destroy');


    Route::get('facultad', 'FacultadController@index');
    Route::get('facultad/{facultad_id}', 'FacultadController@show');
    Route::post('facultad', 'FacultadController@create');
    Route::put('facultad/{facultad_id}', 'FacultadController@update');
    Route::delete('facultad/{facultad_id}', 'FacultadController@destroy');


    Route::get('cursos', 'CursoController@index');
    Route::get('cursos/{cursos_id}', 'CursoController@show');
    Route::post('cursos', 'CursoController@create');
    Route::put('cursos/{cursos_id}', 'CursoController@update');
    Route::delete('cursos/{cursos_id}', 'CursoController@destroy');


    Route::get('empresa', 'EmpresaController@index');
    Route::get('empresa/{empresa_id}', 'EmpresaController@show');
    Route::get('empresa/{egresado_id}', 'EmpresaController@showdet');
    Route::post('empresa', 'EmpresaController@create');
    Route::put('empresa/{empresa_id}', 'EmpresaController@update');
    Route::delete('empresa/{empresa_id}', 'EmpresaController@destroy');


    Route::get('detalle', 'DetalleController@index');
    Route::get('detalle/{detalle_id}', 'DetalleController@show');
    Route::post('detalle', 'DetalleController@create');
    Route::put('detalle/{detalle_id}', 'DetalleController@update');
    Route::delete('detalle/{detalle_id}', 'DetalleController@destroy');



});
