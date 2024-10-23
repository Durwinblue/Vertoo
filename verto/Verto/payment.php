<?php
$page_text_ID = 57;
include("header.php");
?>
<div class="driver">
    <h4>Payment</h4>
    <div class="m-3 ms-0">
        <span class="text-success font-12"><i class="bi bi-check-circle-fill"></i> <?php echo texts(58, $lang); ?></span>
    </div>
    <div class="listcard">
        <img src="assets/image/list-card.jpg" alt="" />
    </div>
    <div>
        <div class="mb-3 col-md-5">
            <label for="name" class="form-label"><?php echo texts(59, $lang); ?></label>
            <input type="text" class="form-control" id="name" />
        </div>
        <div class="mb-3 col-md-5">
            <label for="card" class="form-label"><?php echo texts(60, $lang); ?></label>
            <input
                type="text"
                class="form-control"
                id="card"
                placeholder="0000 0000 0000 0000" />
        </div>
        <div class="row">
            <label class="form-label"><?php echo texts(61, $lang); ?></label>
            <div class="col-md-2 mb-3">
                <select id="month"
                    class="form-select bg-light"
                    aria-label="Default select example">
                    <option value="0" selected>Month</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="col-md-2 mb-3">
            <select id="year"
                    class="form-select bg-light"
                    aria-label="Default select example">
                    <option value="0" selected>Year</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
            </select>
                </div>
        </div>
        <div class="mb-3 col-md-5">
            <label for="number" class="form-label"><?php echo texts(62, $lang); ?></label>
            <input type="number" id="cv2" class="form-control" id="number" />
        </div>
        <button type="button" onclick="reserve()" class="btn btn-danger"><?php echo texts(63, $lang); ?></button>
    </div>
</div>
<script>
    if (localStorage.getItem("reserv_first") == undefined) {
        window.location.href = "reserve";
    } else {
        let reserv_first = localStorage.getItem("reserv_first");
        reserv_first = JSON.parse(reserv_first);
        let reserv_driver = localStorage.getItem("reserv_driver");
        reserv_driver = JSON.parse(reserv_driver);

        function reserve() {
            $.ajax({
                type: "post",
                url: "api/reserve",
                data: {
                    user_first_name: reserv_first.first_name,
                    user_last_name: reserv_first.last_name,
                    car_ID: reserv_first.car_ID,
                    date: reserv_first.day + " " + reserv_first.month + " - " + reserv_first.ex_day + " " + reserv_first.ex_month,
                    off_road: reserv_first.off_road,
                    barbecue_kit: reserv_first.barbecue_kit,
                    camping_kit: reserv_first.camping_kit,
                    child_seat: reserv_first.child_seat,
                    gps: reserv_first.gps,
                    special: reserv_first.special,
                    driver_first_name: reserv_driver.first_name,
                    driver_last_name: reserv_driver.last_name,
                    country: reserv_driver.country,
                    phone: reserv_driver.phone,
                    card_number:$("#card").val(),
                    cv2:$("#cv2").val(),
                    card_expire:$("#month").val()+"/"+$("#year").val(),
                    new: true
                },
                dataType: "json",
                success: function(response) {
                    if (response[0] == "success") {
                        alert('<?php echo texts(65,$lang);?>');
                        window.location.href="reserve";
                    } else {
                        alert(response[1])
                    }
                }
            });
        }
    }
</script>
<?php include("footer.php"); ?>