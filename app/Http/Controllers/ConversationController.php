<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversationController extends Controller
{
    //


    function selectAllConversationByPersonne($id){
      $conversation = DB::select("sp_select_conv_by_joueur(?)", [$idPersonne]);
      Json_encode($conversation);
      return $conversation;
    }
}
