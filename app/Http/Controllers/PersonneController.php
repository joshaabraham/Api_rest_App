<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Personne;
class PersonneController extends Controller
{
    //


    public function selectPersonne($email, $password){
      // renvoyer le resultat de la procedure stocke 'SelectPlayer'
      $personne = DB::select("call sp_log_user(?,?)", [$email, $password]);
      Json_encode($personne);
      dump($personne);
    //  return Json_encode($personne);
    }

    public function create(){


    }
    public function store(Request $request){
      Personne::create($request->all());
      return 'success';
      return $request->all();
    }

}
