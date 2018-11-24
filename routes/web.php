<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['middleware' => ['web']], function () {

    Route::get('/','BlogController@index');

    Route::get('/blog/{id}','BlogController@post_unique')->where('id', '[0-9]+');

    Route::get('/categorie/{id}','CategorieController@categorie_unique')->where('id', '[0-9]+');

    Route::get('onoustrouver', function(){
        return 'ceci est la page ou nous nous trouvons.';
    });

    Route::get('utilisateur/{id}', function($id){
        return 'Utilisateur n°'.$id;
    })->where('id', '[0-9]+');

    Route::get('/nouveau', ['middleware' => 'auth', 'uses' => 'BlogController@nouveau_blog']);
    Route::post('/creation', 'BlogController@creation_blog');

    Route::get('/edition/{id}',['middleware' => 'auth', 'uses' =>'BlogController@edition_post'])->where('id', '[0-9]+');
    Route::put('/edit/{id}','BlogController@edition_valider');

    Route::get('/suppression/{id}',['middleware' => 'auth', 'uses' => 'BlogController@suppression_post'])->where('id', '[0-9]+');

    Auth::routes();
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
