<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.index');
})->name("home")->middleware('auth');
Auth::routes();
Route::get('/restrito', function () {
    return view('restrito.index');
})->name("restrito");
Route::resource('curso', 'CursoController')->middleware('AccessLevel');
Route::resource('professor', 'ProfessorController')->middleware('AccessLevel');
Route::resource('disciplina', 'DisciplinaController')->middleware('AccessLevel');
Route::resource('aluno', 'AlunoController')->middleware('AccessLevel');
Route::resource('matricula/', 'MatriculaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
