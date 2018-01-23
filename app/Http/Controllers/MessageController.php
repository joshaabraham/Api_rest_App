<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //


function selecteveryMessageByconversation($idConv, $idPersonne){
  $message = DB::select("sp_selectAllMessageOfAConversation(?, ?)", [$idConv, $idPersonne]);
  Json_encode($message);
  return $message;

    }
}
