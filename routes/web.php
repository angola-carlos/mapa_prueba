<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios', function () {
    return view('usuarios');
});
Route::get('/mapa', function () {
    return view('mapa');
});


Route::get('/subir-plano', function () {
    return view('subir-plano');
});

Route::post('/subir-plano', function (Request $request) {
    $request->validate([
        'plano' => 'required|image|max:5000',
    ]);

    $path = $request->file('plano')->store('planos');

    return redirect('/mapa')->with('plano', Storage::url($path));
});