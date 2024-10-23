<?php
require_once("Vendor/connect.php");
$site_url = DB::queryFirstField("SELECT value from settings where name=%s", 'site_url');
$lang = "en";
if (isset($_COOKIE["lang"])) {
  if (in_array(htmlentities($_COOKIE["lang"]), ["en", "tr", "du"])) {
    $lang = htmlentities($_COOKIE["lang"]);
  }
}
if(isset($car_ID)){
  $count_search = DB::queryFirstField("SELECT COUNT(*) FROM cars WHERE status=1 and ID=%s", $car_ID);
  if($count_search==0){
      header("location:".$site_url);
  }else{
  $page_title=DB::queryFirstField("SELECT title from cars where ID=%s", $car_ID);
  }
}
$site_name = DB::queryFirstField("SELECT value from settings where name=%s", 'site_name_' . $lang);
if(isset($_SESSION["mdasldkadasd@sdsl54"])){
  $User_ID=base64_decode($_SESSION["mdasldkadasd@sdsl54"]);
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <title><?php echo $site_name . " | " . (isset($page_text_ID) ? texts($page_text_ID, $lang) : $page_title); ?> </title>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
</head>

<body>
<?php if(isset($page_text_ID)&&$page_text_ID==2){?>  
<div class="background-body">
    <div class="background-body-left"></div>
    <div class="background-body-right"></div>
  </div>
  <?php }?>
  <div class="div-message">
    <i class="bi bi-chat show-chat btn btn-danger"></i>
    <div class="chat">
      <div class="title-chat">
        <p><?php echo texts(2, $lang); ?></p>
        <i class="bi bi-x-circle close-chat"></i>
      </div>
      <div class="message">
      </div>
      <div class="send-message">
        <input type="text" placeholder="<?php echo texts(2, $lang); ?>..." />
        <i class="bi bi-send"></i>
      </div>
    </div>
  </div>

  <main>
    <section class="section">
      <header>
        <div class="nev-head-main">
          <div class="bars-menu">
            <i class="bi bi-list"></i>
          </div>
          <img src="assets/image/IMG_1074-removebg-preview.png" alt="" />

          <div class="close-menu"></div>
          <div class="nav-head">
            <a href="<?php echo $site_url; ?>"><?php echo texts(4, $lang); ?></a>
            <a href="<?php echo $site_url; ?>reserve"><?php echo texts(5, $lang); ?></a>
            <a href="<?php echo $site_url; ?>subscription"><?php echo texts(6, $lang); ?></a>
            <a href="<?php echo $site_url; ?>report"><?php echo texts(66, $lang); ?></a>
          </div>
        </div>
        <div class="head-login <?php echo (isset($page_text_ID)&&$page_text_ID==2?"":"head-login-w") ?>">
          <?php if(isset($User_ID)){?>
            <a href="logout" class="a-border"><?php echo texts(50, $lang); ?></a>
          <?php }else{?>
          <a href="auth"><?php echo texts(7, $lang); ?></a>
          <a href="auth?type=register" class="a-border"><?php echo texts(8, $lang); ?></a>
          <?php }?>
        </div>
      </header>