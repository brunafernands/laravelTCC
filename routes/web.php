<?php


Route::get('/', function () {
    return view('pageInicial');
});

Route::get('/pageProduto', function () {
    return view('pageProduto');
});

Route::get('faleConosco', function(){
    return view('faleConosco');
});

Route::get('localizacao', function(){
    return view('localizacao');
});

Route::get('produtos', function(){
    return view('produtos');
});

Route::get('/pageInicial', function () {
    return view('pageInicial');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/espacoCliente', function () {
    return view('espacoCliente');
});

Route::get('/sobreNos', function () {
    return view('sobreNos');
});

Route::get('/artigos', function () {
    return view('artigos');
});

Route::get('/pageAdmin', function () {
    return view('pageAdmin');
});



Route::group(['middleware' => 'auth'], function() {
   
    Route::get('login', function(){
        return view('login');
    });

    Route::get('registrar', function(){
        return view('registrar');
    });

    Route::get('/admin/criarProduto', function () {
        return view('criarProduto');
    });

    Route::get('/criarArtigo', function () {
        return view('criarArtigo');
    });

    Route::get('/admin/adicionarFuncionario', function () {
        return view('pageAdcionarFuncionario');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
