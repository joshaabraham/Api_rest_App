<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoueurController extends Controller
{
    //
    public function selectPlayerData($idSport, $idPersonne){
      $joueur = DB::select("call sp_select_player_data (?,?)", [$idSport, $idPersonne]);
      dump($joueur);
      //  return Json_encode($joueur);

    }
}
