<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    //
    private $_id;
    private $_guid;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_password;
    private $_dateCreation;
    private $_dateModification;


// getter et setter

    public function getId(){
    return $this->_id;
    }
    public function setId($id){
      $this->_id = $id;
    }
    public function getGuid(){
    return $this->_guid;
    }
    public function setGuid($guid){
      $this->_guid = $guid;
    }
    public function getNom(){
    return $this->_nom;
    }
    public function setGuid($nom){
      $this->_nom = $nom;
    }
    public function getPrenom(){
    return $this->_prenom;
    }
    public function setPrenom($prenom){
      $this->_prenom = $prenom;
    }
    public function getEmail(){
    return $this->_email;
    }
    public function setEmail($email){
      $this->_email = $email;
    }
    public function getPassword(){
    return $this->_password;
    }
    public function setPassword($password){
      $this->_password = $password;
    }
    public function getCreateDate(){
      return $this->_dateCreation;
    }
    public function SetCreateDate(){
    $this->_dateCreation = date("Y-m-d H:i:s");
    }
    public function getUpdatedDate(){
      return $this->_dateModification;
    }
    public function setUpdateDate(){
        $this->_dateModification = date("Y-m-d H:i:s");
    }




}
