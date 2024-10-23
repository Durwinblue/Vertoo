<?php
    $page_text_ID = 52;
include("header.php");
?> 
<div class="driver">
            <h4><?php echo texts(53,$lang);?></h4>
            <p>
              <span id="car_name">-</span>
              <span class="text-muted font-12" id="reserve_date">-</span>
            </p>
            <div>
              <div class="mb-3 col-md-5">
                <label for="firstname" class="form-label"><?php echo texts(23,$lang);?> :</label>
                <input type="text" class="form-control" id="firstname" />
              </div>
              <div class="mb-3 col-md-5">
                <label for="lastname" class="form-label"><?php echo texts(24,$lang);?> :</label>
                <input type="text" class="form-control" id="lastname" />
              </div>
              <div class="col-md-5 mb-3">
                <label class="form-label"><?php echo texts(54,$lang);?> :</label>
                <select id="country"
                  class="form-select bg-light"
                  aria-label="Default select example"
                >
                <option value="0">-</option>
                <?php
        $results = DB::query("SELECT * FROM apps_countries order by country_name asc");
        foreach ($results as $row) {
            echo '<option value="'.$row["country_code"].'">'.$row["country_name"]."</option>";
        }?>
                </select>
              </div>
              <div class="mb-3 col-md-5">
                <label for="number" class="form-label"><?php echo texts(55,$lang);?></label>
                <input type="number" class="form-control" id="phone" />
              </div>
              <button type="button" onclick="go_to_payment()" class="btn btn-danger"><?php echo texts(56,$lang);?></button>
            </div>
          </div>
          <script>
    if(localStorage.getItem("reserv_first")==undefined){
        window.location.href="reserve";
    }else{
        let reserv_first=localStorage.getItem("reserv_first");
        reserv_first=JSON.parse(reserv_first);
        $(document).ready(function () {
            $("#car_name").html(reserv_first["car_name"]);
            $("#reserve_date").html(reserv_first.day+" "+reserv_first.month+","+reserv_first.ex_day+" "+reserv_first.ex_month);
        });
        function go_to_payment(){
            let first_name = $("#firstname").val();
            let last_name = $("#lastname").val();
            let country = $("#country").val();
            let phone = $("#phone").val();
            if (first_name.length < 3) {
                alert('<?php echo texts(34, $lang); ?>')
            } else if (last_name.length < 4) {
                alert('<?php echo texts(35, $lang); ?>')
            } else {
                let data_item = {
                    first_name: first_name,
                    last_name: last_name,
                    country: country,
                    phone: phone,
                };
                localStorage.setItem("reserv_driver", JSON.stringify(data_item));
                window.location.href = "<?php echo (isset($User_ID) ? "payment" : "auth"); ?>";
            }
        }
    }
</script>
<?php include("footer.php"); ?>