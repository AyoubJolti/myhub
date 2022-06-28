<?php
include_once "connexion.php";
class users{
    private $id;
    private $nome;
    private $ville;
    function __construct($id,$nome,$ville)
    {
     $this->id=$id;  
     $this->nome=$nome;
     $this->ville=$ville; 
    }
     public function getID(){
        return $this->id;
    }
    public function getnome(){
        return $this->nome;
    }
    public function getVille(){
        return $this->ville;
    }
    public function setID($id){
        $this->id=$id;
    }
    public function setnome($nome){
$this->nome=$nome;
    }
    public function setprenom($ville){
        $this->ville=$ville;

    }
}
