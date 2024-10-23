<?php 
$page_text_ID = 1;
include("header.php");?>
      <div class="rent-div">
        <h2 class="font-400"><?php echo texts(9, $lang); ?></h2>
        <h2 class="bold"><?php echo texts(10, $lang); ?></h2>
        <p><?php echo texts(11, $lang); ?></p>
      </div>
      <div class="img-car">
        <img
          id="tilt"
          data-aos="fade-left"
          data-aos-anchor="#example-anchor"
          data-aos-offset="500"
          data-aos-duration="500"
          src="assets/image/car.png"
          alt="" />
      </div>
      <div
        class="search-city"
        data-aos="fade-right"
        data-aos-anchor="#example-anchor"
        data-aos-offset="500"
        data-aos-duration="500">
        <p><?php echo texts(12, $lang); ?></p>
        <div class="input-search">
          <input type="text" id="search_input" placeholder="<?php echo texts(13, $lang); ?>" />
          <button class="btn btn-danger" onclick="get_search()"><?php echo texts(14, $lang); ?></button>
        </div>
      </div>
    </section>
    <section class="section-1">
      <div class="title">
        <h4><?php echo texts(15, $lang); ?></h4>
        <p><?php echo texts(16, $lang); ?></p>
      </div>
      <div class="slider owl-carousel owl-theme">
        <?php
        $results = DB::query("SELECT * FROM cars WHERE status=1 order by ID desc limit 5");
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
        ?>
      </div>
      <script>
        function get_search(){
        let inp=$("#search_input").val();
        if(inp.length>3){
            var newUrl = new URL("<?php echo $site_url;?>search");
                newUrl.searchParams.set('q', inp);
            window.location.href=newUrl;
        }else{
             alert('<?php echo texts(18,$lang);?>');
        }
    }
    
    $('#search_input').keyup(function(e){
    if(e.keyCode == 13)
    {
      get_search();
    }
});
    
      </script>
      <?php include("footer.php"); ?>