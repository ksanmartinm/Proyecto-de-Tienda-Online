<?php

class Database{
    public static function(){
        $db = new mysqli('localhost','root','','tienda_master');
        $db->query("SET NAME 'utf8'");
        return $db;
    }
}


?>