<?php

use Illuminate\Support\Facades\Route;

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


Route::post('/test', 'SMSController@getMessages');
Auth::routes();

/*Route::prefix('basique')
    ->namespace('Basic')
    ->middleware(['auth','basique'])
    ->name('basique.')
    ->group(function(){
        Route::get('/home', 'Basique\HomeController@index')->name('home');

        Route::get('annonces/validate', 'AnnoncesController@validatedAnnonces')->name("annonces.validate");
        Route::resource('annonces', 'AnnoncesController');
        Route::resource('produits', 'ProduitsController');
        Route::resource('personnes', 'PersonnesController');
        Route::resource('comptes', 'ComptesController');
        Route::resource('typecomptes', 'TypeComptesController');
        Route::resource('structures', 'StructuresController');
        Route::resource('users', 'UsersController');
        Route::resource('salons', 'SalonsController');

    });*/


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('annonces/validate', 'AnnoncesController@validatedAnnonces')->name("annonces.validate");
    Route::resource('annonces', 'AnnoncesController');
    Route::resource('invitations', 'InvitationsController');
    Route::resource('produits', 'ProduitsController');
    Route::resource('personnes', 'PersonnesController');
    Route::resource('comptes', 'ComptesController');
    Route::resource('typecomptes', 'TypeComptesController');
    Route::resource('structures', 'StructuresController');
    Route::resource('users', 'UsersController');
    Route::resource('salons', 'SalonsController');
});

Route::get('/structures/create/{id}', 'StructuresController@create');
Route::post('/structures', 'StructuresController@store')->name("structures.store");
Route::post('/personnes', 'PersonnesController@store')->name("personnes.store");
Route::get('/typecomptes', 'TypeComptesController@index')->name("typecomptes.index");

