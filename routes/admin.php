<?php



Route::get('/', 'HomeController@index')->name('dashboard'); 

Route::get('/product/data', 'DataController@articles')->name('article.data');


Route::get('/product', 'ArticleController@index')->name('article.index');

Route::get('/product/create', 'ArticleController@create')->name('article.create');
Route::post('/product/store', 'ArticleController@store')->name('article.store');


Route::get('/product/{article}/edit', 'ArticleController@edit')->name('article.edit');
Route::put('/product/{article}/update', 'ArticleController@update')->name('article.update');


Route::delete('/product/{article}/destroy', 'ArticleController@destroy')->name('article.destroy');