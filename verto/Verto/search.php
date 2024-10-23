<?php 
$page_text_ID = 14;
include("header.php");
if(isset($_GET["q"])){
$search=htmlentities($_GET["q"]);
$search=urldecode($search);
$count_search = DB::queryFirstField("SELECT COUNT(*) FROM cars WHERE status=1 and title Like %s", '%'.$search.'%');
}else{
    header("location: ".$site_url);
}
?>
 <section class="section-1 affordable">
        <div class="title title-select">
          <h4><?php echo texts(19,$lang)." : ".$search;?></h4>
        </div>
        <div class="slider slider-w">
          <?php if($count_search>0){
 $results = DB::query("SELECT * FROM cars WHERE status=1 and title Like %s",'%'.$search.'%');
 foreach ($results as $row) {
   $car_link = "window.location.href='reserve?car=" . $row["ID"] . "'";
   echo '<div class="div-slider item">
   <img src="uploads/' . $row["image"] . '" alt="" />
   <p class="bold m-0 mt-3">' . $row['title'] . '</p>
   <p>
     <span class="color-red bold">$' . number_format($row["price"]) . '</span>
     <span class="font-12"> / Per Day</span>
   </p>
   <div class="icon-div-slider">
     <div class="icon">
       <img src="assets/image/172463_engine_icon.svg" alt="" />
       <span class="bold">' . $row["engine"] . '</span>
     </div>
     <div class="icon">
       <img src="assets/image/seat.svg" alt="" />
       <span class="bold">Seat ' . $row["persons"] . '</span>
     </div>
     <div class="icon">
       <img src="assets/image/wheel.svg" alt="" />
       <span class="bold">' . ($row["auto"] == 0 ? "Manual" : "Automatic") . '</span>
     </div>
     <div class="icon">
       <img
         src="assets/image/2851758_car_land_transportation_vehicle_icon.svg"
         alt="" />
       <span class="bold">' . $row["type"] . '</span>
     </div>
   </div>
   <button onclick="' . $car_link . '" class="btn btn-danger">' . texts(17, $lang) . '</button>
 </div>';
 }
 
          }else{
            echo "<div class='alert alert-danger mt-2 p-2 text-center col-md-12'>".texts(20,$lang)."</div>";
          }
          ?>
        </div>
<?php include("footer.php");?>