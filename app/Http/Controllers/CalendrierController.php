<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendrierController extends Controller
{
    //


    function selectcalendrierByJoueur($idJoueur, $idSport){
      $calendrier = DB::select("call sp_select_player_data (?,?)", [$idJoueur, $idSport]);
      dump($calendrier);
      //  return Json_encode($calendrier);

    }
}
