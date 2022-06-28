<?php
include_once "connexion.php";
include_once "users.php";
class gesusers
{
  private static  $connect;
  public function __construct()
  {
    self::$connect = connexion::connect();
  }
  public static function selectAll_Users()
  {
   

    $req = "select * from users";
    $connect = self::$connect;
    $result = $connect->query($req);
    return $result;
  }
   
  static function ajouter(users $u)
  {
    $req = "Insert into users(nome,ville)values('{$u->getnome()}','{$u->getVille()}')";
    $connect = connexion::connect();
    $result = $connect->exec($req);
    return $result;
  }
  static function delete($id)
  {
    $req = "delete from users where id=$id";
    $connect = connexion::connect();

    $result = $connect->exec($req);
    return $result;
  }
  static function rechercher($id)
  {
    $req = "select * from users where id=$id";
    $connect = connexion::connect();
    $result = $connect->query($req);
    return $result;
  }
  static function edit($id,$nom,$ville){
    $req="update users set nome='$nom',ville='$ville' where id='$id'";
    $connect=connexion::connect();
    $result=$connect->exec($req);
    return $result;
  }
  public function getcount(){
    $connect=$this->connect;
    $result=$connect->query("select count(*),sum(id) from users");
    return $result;
  }
}
