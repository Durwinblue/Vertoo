<?php
require_once("../Vendor/connect.php");
$site_url = DB::queryFirstField("SELECT value from settings where name=%s", 'site_url');
$lang = "en";
if (isset($_COOKIE["lang"])) {
    if (in_array(htmlentities($_COOKIE["lang"]), ["en", "tr", "du"])) {
        $lang = htmlentities($_COOKIE["lang"]);
    }
}
if (!isset($_SESSION["mdasldkadasd@sdsl54"])) {

if(isset($_POST["register"]))
{
    $name=htmlentities($_POST["name"]);
    $mail=htmlentities($_POST["mail"]);
    $password=htmlentities($_POST["password"]);
    if(strlen($name)<3){
        echo json_encode(["error",texts(43,$lang)]);
    }else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo json_encode(["error",texts(44,$lang)]);
    }else  if(DB::queryFirstField("SELECT COUNT(*) FROM users WHERE email=%s", $mail)>0){
        echo json_encode(["error",texts(45,$lang)]);
    }else if(strlen($password)<7){
        echo json_encode(["error",texts(46,$lang)]);
    }else{
        DB::insert('users', array(
            'name' => $name,
            'email' => $mail,
            'password' => base64_encode($password)
          ));
          $_SESSION["mdasldkadasd@sdsl54"]=base64_encode(DB::queryFirstField("SELECT ID FROM users WHERE email=%s", $mail));
echo json_encode(["success",true]); 
    }
}
if(isset($_POST["login"])){
    $mail=htmlentities($_POST["mail"]);
    $password=htmlentities($_POST["password"]);
    if(DB::queryFirstField("SELECT COUNT(*) FROM users WHERE email=%s and password=%i", $mail,base64_encode($password))>0){
$_SESSION["mdasldkadasd@sdsl54"]=base64_encode(DB::queryFirstField("SELECT ID FROM users WHERE email=%s and password=%i", $mail,base64_encode($password)));
echo json_encode(["success",true]);  
}else{
        echo json_encode(["error",texts(42,$lang)]);
    }

}
}
?>