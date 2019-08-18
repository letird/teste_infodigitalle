<?php

Route::get('/', 'ControllerPessoa@inicio');

Route::get('/pessoas', 'ControllerPessoa@index')->name('listar_pessoas');

Route::get('/pessoas/create', 'ControllerPessoa@create')->name('criar_pessoa');

Route::post('/pessoas/create', 'ControllerPessoa@store');

Route::get('/pessoas/edit/{id}', 'ControllerPessoa@edit');

Route::post('/pessoas/edit/{id}', 'ControllerPessoa@update');

Route::get('/pessoas/view/{id}', 'ControllerPessoa@view');

Route::delete('/pessoas/{id}', 'ControllerPessoa@destroy');