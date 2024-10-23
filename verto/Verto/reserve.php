<?php
if (isset($_GET["car"])) {
    $car_ID = htmlentities($_GET["car"]);
    $car_ID = urldecode($car_ID);
} else {
    $page_text_ID = 5;
}
include("header.php");
if (isset($car_ID)) { ?>
    <div class="driver">
        <h6 class="mb-3"><?php echo texts(21, $lang); ?> :</h6>
        <div class="row">
            <div class="col-md-2 mb-3">
                <select id="month" onchange="change_month()"
                    class="form-select bg-light"
                    aria-label="Default select example">
                    <option value="January" days="31">January</option>
                    <option value="February" days="28">February</option>
                    <option value="March" days="31">March</option>
                    <option value="April" days="30">April</option>
                    <option value="May" days="31">May</option>
                    <option value="June" days="30">June</option>
                    <option value="July" days="31">July</option>
                    <option value="August" days="31">August</option>
                    <option value="September" days="30">September</option>
                    <option value="October" days="31">October</option>
                    <option value="November" days="30">November</option>
                    <option value="December" days="31">December</option>
                </select>
            </div>
            <div class="col-md-2 mb-3">
                <select id="days"
                    class="form-select bg-light"
                    aria-label="Default select example">
                </select>
            </div>
        </div>
        <h6 class="mb-3"><?php echo texts(51, $lang); ?> :</h6>
        <div class="row">
            <div class="col-md-2 mb-3">
                <select id="ex_month" onchange="change_ex_month()"
                    class="form-select bg-light"
                    aria-label="Default select example">
                    <option value="January" days="31">January</option>
                    <option value="February" days="28">February</option>
                    <option value="March" days="31">March</option>
                    <option value="April" days="30">April</option>
                    <option value="May" days="31">May</option>
                    <option value="June" days="30">June</option>
                    <option value="July" days="31">July</option>
                    <option value="August" days="31">August</option>
                    <option value="September" days="30">September</option>
                    <option value="October" days="31">October</option>
                    <option value="November" days="30">November</option>
                    <option value="December" days="31">December</option>
                </select>
            </div>
            <div class="col-md-2 mb-3">
                <select id="ex_days"
                    class="form-select bg-light"
                    aria-label="Default select example">
                </select>
            </div>
        </div>

        <h6 class="mb-4"><?php echo texts(22, $lang); ?></h6>

        <div class="mb-3 col-md-5">
            <label for="firstname" class="form-label"><?php echo texts(23, $lang); ?> :</label>
            <input
                type="text"
                class="form-control"
                id="firstname" />
        </div>
        <div class="mb-5 col-md-5">
            <label for="lastname" class="form-label"><?php echo texts(24, $lang); ?> :</label>
            <input
                type="text"
                class="form-control"
                id="lastname" />
        </div>
        <h6 class="mb-4"><?php echo texts(25, $lang); ?> :</h6>
        <div class="d-flex flex-wrap mb-3 col-md-6">
            <div class="form-check me-3 mb-3">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="offroad" />
                <label class="form-check-label" for="offroad">
                    <?php echo texts(26, $lang); ?>
                </label>
            </div>
            <div class="form-check me-3 mb-3">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="barbecue_kit" />
                <label class="form-check-label" for="barbecue_kit">
                    <?php echo texts(27, $lang); ?>
                </label>
            </div>
            <div class="form-check me-3 mb-3">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="camping_kit" />
                <label class="form-check-label" for="camping_kit">
                    <?php echo texts(28, $lang); ?>
                </label>
            </div>
            <div class="form-check me-3 mb-3">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="child_seat" />
                <label class="form-check-label" for="child_seat">
                    <?php echo texts(29, $lang); ?>
                </label>
            </div>
            <div class="form-check me-3 mb-3">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="gps" />
                <label class="form-check-label" for="gps">
                    <?php echo texts(30, $lang); ?>
                </label>
            </div>
        </div>
        <h6 class="mb-4"><?php echo texts(31, $lang); ?> :</h6>
        <div class="mb-5 col-md-5">
            <textarea
                placeholder="<?php echo texts(32, $lang); ?>"
                class="form-control" id="special"></textarea>
        </div>
        <div>
            <button type="button" onclick="go_to_driver()" class="btn btn-danger me-2">
                <?php echo texts(33, $lang); ?>
            </button>
        </div>
    </div>
    <script>
        $("#month").val('<?php echo date("F"); ?>');
        change_month();
        $("#days").val('<?php echo date("d"); ?>');
        change_ex_month();

        function change_month() {
            let month_option = $('#month option:selected');
            let month = $(month_option).val();
            let days = $(month_option).attr("days");
            $("#days").html("");
            for (var i = 1; i <= days; i++) {
                $("#days").append('<option value="' + i + '">' + i + "</option>");
            }
        }

        function change_ex_month() {
            let month_option = $('#ex_month option:selected');
            let month = $(month_option).val();
            let days = $(month_option).attr("days");
            $("#ex_days").html("");
            for (var i = 1; i <= days; i++) {
                $("#ex_days").append('<option value="' + i + '">' + i + "</option>");
            }
        }

        function go_to_driver() {
            let month = $("#month").val();
            let day = $("#days").val();
            let ex_month = $("#ex_month").val();
            let ex_day = $("#ex_days").val();
            let first_name = $("#firstname").val();
            let last_name = $("#lastname").val();
            let off_road = $("#offroad").is(':checked');
            let barbecue_kit = $("#barbecue_kit").is(':checked');
            let camping_kit = $("#camping_kit").is(':checked');
            let child_seat = $("#child_seat").is(':checked');
            let gps = $("#gps").is(':checked');
            let special = $("#special").val();
            if (first_name.length < 3) {
                alert('<?php echo texts(34, $lang); ?>')
            } else if (last_name.length < 4) {
                alert('<?php echo texts(35, $lang); ?>')
            } else {
                let data_item = {
                    month: month,
                    day: day,
                    ex_month: ex_month,
                    ex_day: ex_day,
                    car_ID:<?php echo $car_ID;?>,
                    car_name:'<?php echo DB::queryFirstField("select title from cars where ID=%s",$car_ID);?>',
                    first_name: first_name,
                    last_name: last_name,
                    off_road: off_road,
                    barbecue_kit: barbecue_kit,
                    camping_kit: camping_kit,
                    child_seat: child_seat,
                    gps: gps,
                    special: special
                };
                localStorage.setItem("reserv_first", JSON.stringify(data_item));
                window.location.href = "<?php echo (isset($User_ID) ? "driver" : "auth"); ?>";
            }
        }
    </script>
<?php } else {
    echo '<div class="slider slider-w">';
    $results = DB::query("SELECT * FROM cars WHERE status=1");
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
    echo '</div>';
}
include("footer.php"); ?>