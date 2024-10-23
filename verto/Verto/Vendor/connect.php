<?php
require_once('session.php');
require_once 'db.class.php';
DB::$dsn = 'mysql:host=localhost;dbname=car';
DB::$user = 'root';
DB::$password = '';

function texts($text_ID,$lang){
return DB::queryFirstField("SELECT ".$lang." from texts where ID=%i", $text_ID);
}

?>