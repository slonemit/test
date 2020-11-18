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

Route::get('/', function(){
    return redirect('/login');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('sms', 'SMSController');

    Route::get('annonces/validate', 'AnnoncesController@validatedAnnonces')->name("annonces.validate");
    Route::get('salons/chats', 'SalonsController@chats')->name('salons.chats');
    Route::resource('annonces', 'AnnoncesController');
    Route::resource('achat', 'Achat');
    Route::resource('comment', 'commentaire');
    Route::resource('rendezvous','rendezvous');

    Route::resource('invitations', 'InvitationsController');
    Route::resource('produits', 'ProduitsController');
    Route::resource('structures', 'StructuresController');
    Route::resource('users', 'UsersController');
    Route::resource('comptes', 'ComptesController');
    Route::resource('salons', 'SalonsController');
    Route::resource('commentaires', 'CommentairesController');
    Route::resource('packpubs', 'PackpubsController');
    Route::resource('achatpack', 'AchatPacksController');
    Route::resource('chats', 'MessagesController');
    Route::post('rdv/save', 'RdvsController@save')->name('rdv_annonce');
    Route::resource('rdv', 'RdvsController');

    // Basique routes
    Route::get('pubs', 'Basique\PubsController@index')->name("pubs.index");
    Route::post('pubs', 'Basique\PubsController@store')->name("pubs.store");
    Route::get('companies', 'Basique\StructuresController@index')->name("companies.index");
    Route::get('companies/{id}', 'Basique\StructuresController@show')->name("companies.show");
    Route::resource('news', 'Basique\AnnoncesController');
});

Route::get('/diafaan-http-callback', 'SmsController@callbackSms');
Route::get('/structures/create/{id}', 'StructuresController@create');
Route::post('/structures', 'StructuresController@store')->name("structures.store");

Route::get('/comptes/create/{id}', 'StructuresController@create');
Route::post('/comptes', 'StructuresController@store')->name("structures.store");
Route::post('/personnes', 'PersonnesController@store')->name("personnes.store");
Route::get('/typecomptes', 'TypeComptesController@index')->name("typecomptes.index");
