<?php

class connexion{
    private static $link=null;
    private function __construct($serv,$dbname,$user,$pass)
    {
        self::$link=new PDO("mysql:host=$serv;dbname=$dbname",$user,$pass);
    }
    public static function connect($serv="localhost",$dbname="revesion",$user="root",$pass=""){
        if(self::$link==null){
            new connexion($serv,$dbname,$user,$pass);
        }
        return self::$link;
    }
}
?>