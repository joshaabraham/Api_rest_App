<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiveauController extends Controller
{
    //


    function selectniveauByJoueurAndSport($idJoueur, $idSport){
      $niveau = DB::select("call sp_get_niveau(?,?)", [$idJoueur, $idSport]);
      Json_encode($niveau);
      dump($niveau);
    //  return Json_encode($personne);

    }
}
