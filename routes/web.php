<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function(){
    $name="Vlad";
    $surname="Lazar";
    return view('homepage',['name'=>$name,'surname'=>$surname]);
});

Route::get('/pagina2', function(){
    return view('pagina2');
});
