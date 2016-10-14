<?php

Route::get('/', 'Users@index'); // Mostrar login

Route::resource('Muestra', 'Users');

//DEPENDENCIAS
Route::post('companys', 'CompanyController@store');
Route::get('companyc', 'CompanyController@create');
Route::get('companyd/{company}', 'CompanyController@eliminar');

Route::get('companye/{company}', ['uses' => 'CompanyController@edit', 'as' => 'companyedit']);
Route::patch('companyu/{company}', ['uses' => 'CompanyController@update', 'as' => 'companyupdate']);

//LOGIN
Route::get('login', 'Auth\AuthController@showLogin'); // Mostrar login
Route::post('login', 'Auth\AuthController@postLogin'); // Verificar datos
Route::get('logout', 'Auth\AuthController@logOut'); // Finalizar sesión

//Crud de usuarios
Route::get('users', 'Users@welcome');
Route::get('userc', 'Users@create');
Route::post('userstore', 'Users@store');
Route::get('userd/{user}', 'Users@destroy');

Route::get('usere/{user}', ['uses' => 'Users@edit', 'as' => 'useredit']);
Route::patch('useru/{user}', ['uses' => 'Users@update', 'as' => 'userupdate']);

//ASIGNACION
Route::get('helloasig', 'AlumnoController@index');
Route::get('showdep/{dependencia}', 'AlumnoController@show');
Route::get('asigdep/{dependencia}', 'AlumnoController@asignar');
Route::patch('asiga/{user}', ['uses' => 'AlumnoController@update', 'as' => 'asigalumno']);

Route::get('quitar/{alumno}', 'AlumnoController@quitar');
Route::post('asigal', 'AlumnoController@asignacion');

//PDF
Route::get('pdf', 'PdfController@invoice');
