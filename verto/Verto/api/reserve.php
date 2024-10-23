<?php
require_once("../Vendor/connect.php");
$site_url = DB::queryFirstField("SELECT value from settings where name=%s", 'site_url');
$lang = "en";
if (isset($_COOKIE["lang"])) {
    if (in_array(htmlentities($_COOKIE["lang"]), ["en", "tr", "du"])) {
        $lang = htmlentities($_COOKIE["lang"]);
    }
}
if (isset($_SESSION["mdasldkadasd@sdsl54"])) {
    $User_ID=base64_decode($_SESSION["mdasldkadasd@sdsl54"]);

    if(isset($_POST["new"]))
{
    $user_first_name=htmlentities($_POST["user_first_name"]);
    $user_last_name=htmlentities($_POST["user_last_name"]);
    $car_ID=htmlentities($_POST["car_ID"]);
    $date=htmlentities($_POST["date"]);
    $off_road=htmlentities($_POST["off_road"]);
    $barbecue_kit=htmlentities($_POST["barbecue_kit"]);
    $camping_kit=htmlentities($_POST["camping_kit"]);
    $child_seat=htmlentities($_POST["child_seat"]);
    $gps=htmlentities($_POST["gps"]);
    $special=htmlentities($_POST["special"]);
    $driver_first_name=htmlentities($_POST["driver_first_name"]);
    $driver_last_name=htmlentities($_POST["driver_last_name"]);
    $country=htmlentities($_POST["country"]);
    $phone=htmlentities($_POST["phone"]);
    $card_number=htmlentities($_POST["card_number"]);
    $cv2=htmlentities($_POST["cv2"]);
    $card_expire=htmlentities($_POST["card_expire"]);

if(strlen($user_first_name)<3||strlen($user_last_name)<3||strlen($driver_first_name)<3||strlen($driver_last_name)<3||strlen($card_number)<16||strlen($cv2)<3){
    echo json_encode(["error",texts(64,$lang)]);
}else{
    DB::insert('reserve', array(
        'first_name' => $user_first_name,
        'last_name' => $user_last_name,
        'car_ID' => $car_ID,
        'User_ID'=>$User_ID,
        'date'=>$date,
        'off_road'=>$off_road,
        'barbecue_kit'=>$barbecue_kit,
        'camping_kit'=>$camping_kit,
        'child_seat'=>$child_seat,
        'gps'=>$gps,
        'special'=>$special,
        'driver_first_name'=>$driver_first_name,
        'driver_last_name'=>$driver_last_name,
        'country'=>$country,
        'phone'=>$phone,
      ));
      echo json_encode(["success",true]);
}
}
}
