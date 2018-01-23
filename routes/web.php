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

Route::get('/', function () {
    return view('welcome');
});


Route::get('Personnes/{email}/{password}', 'PersonneController@selectPersonne');
Route::get('Personnes/create' , ['uses' => 'PersonneController@create']);
Route::post('Personnes',  'PersonneController@store');


Route::get('Joueur/{idSport}/{idPersonne}', 'JoueurController@selectPlayerData');
//Route::post
//Route::update

Route::get('Conversation/{idPersonne}', 'ConversationController@selectAllConversationByPersonne');
//Route::post
//Route::update

Route::get('Message/{idConversation}/{idPersonne}', 'MessageController@selecteveryMessageByconversation');
//Route::post

Route::get('Niveau/{idJoueur}/{idSport}', 'NiveauController@selectniveauByJoueurAndSport');
//Route::update
//

Route::get('Calendrier/{idJoueur}/{idSport}', 'CalendrierController@selectcalendrierByJoueur');
//Route::update

Route::get('LJoueur/{}');

/*
Pour le resultat
on concatene les morceau de condition :

Select * from Joueur

inner join ... on ... = ...

if(recherche parNiveau ....){
.'WHERE ... = ...'
}
if(dist en km){
.'WHERE latJoueur between geoLat + dist AND geoLat - dist
AND longJoueur between geoLong + dist AND geoLong -dist'
}
if(){



etc ...

return query.
}



*/
