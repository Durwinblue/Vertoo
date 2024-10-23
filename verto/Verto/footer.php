<div class="b-example-divider"></div>
      <div class="container">
        <footer class="py-5">
          <div class="row">
            <div class="col-md-4 offset-md-1 mb-3 mx-auto">
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <select id="language" onchange="change_lang(this.value)"
                    class="form-select"
                    aria-label="Default select example">
                    <option value="en">English</option>
                    <option value="tr">Türkçe</option>
                    <option value="du">Deutsch</option>
                  </select>
                </div>
            </div>
            <hr/>
            <p class="text-center mt-2">© 2024 <?php echo $site_name;?></p>
          </div>
        </footer>
      </div>
    </section>
  </main>

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    document.getElementById("language").value='<?php echo $lang;?>';
    AOS.init();
    function change_lang(lang){
            const d = new Date();
  d.setTime(d.getTime() + (2*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = "lang=;expires=" + new Date(0).toUTCString()+";path=/; SameSite=None; Secure";
  document.cookie = "lang="+lang+";" + expires + ";path=/; SameSite=None; Secure";
  window.location.reload();
        }
  </script>
  <script src="assets/java_script/java-script.js"></script>
</body>

</html>