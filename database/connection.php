<?php

class Database{
    
    public static $connection;
    
    public static function setUpconnection(){
        if(!isset(Database::$connection)){

            Database::$connection = new mysqli("localhost","root","Danu2003#","qbcoreframework_de3d11");

        }
    }

    public static function iud($q){
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q){
        Database::setUpConnection();
        $result = Database::$connection->query($q);
        return $result;
    }

}

?>