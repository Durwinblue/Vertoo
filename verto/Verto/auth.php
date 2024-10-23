<?php
require_once("Vendor/connect.php");
$site_url = DB::queryFirstField("SELECT value from settings where name=%s", 'site_url');
$lang = "en";
if (isset($_COOKIE["lang"])) {
    if (in_array(htmlentities($_COOKIE["lang"]), ["en", "tr", "du"])) {
        $lang = htmlentities($_COOKIE["lang"]);
    }
}
if (isset($_SESSION["mdasldkadasd@sdsl54"])) {
header("location:reserver");
}
$site_name = DB::queryFirstField("SELECT value from settings where name=%s", 'site_name_' . $lang);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $site_name . " - " . texts(36, $lang); ?></title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="background-body">
        <div class="background-body-left" style="width: 50vw"></div>
        <div class="background-body-right" style="width: 50vw"></div>
    </div>
    <main>
        <div class="container">
            <div class="col-12 col-md-6 col-xl-5 m-auto login">
                <div class="card border-0 rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                        <?php if(isset($_GET["type"])){?>
                            <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h3><?php echo texts(8, $lang); ?></h3>
                                    <p>
                                        <?php echo texts(47, $lang); ?>
                                        <a href="auth" class="text-danger"><?php echo texts(7, $lang); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="row gy-3 overflow-hidden">
                            <div class="col-12">
                                    <label for="name" class="form-label"><?php echo texts(48,$lang);?></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        aria-describedby="emailHelp" />
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label"><?php echo texts(38,$lang);?></label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        aria-describedby="emailHelp" />
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label"><?php echo texts(39,$lang);?></label>
                                    <input type="password" class="form-control" id="password" />
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-danger btn-md" type="button" onclick="register()">
                                            <?php echo texts(49,$lang);?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            function register(){
                                $.ajax({
                                    type: "post",
                                    url: "api/auth",
                                    data: {register:true,name:$("#name").val(),mail:$("#email").val(),password:$("#password").val()},
                                    dataType: "json",
                                    success: function (response) {
                                       if(response[0]=="success"){
                                        window.location.href="reserve";
                                       } else{
                                        alert(response[1]);
                                       }
                                    }
                                });
                            }
                        </script>
                            <?php }else{?>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h3><?php echo texts(7, $lang); ?></h3>
                                    <p>
                                        <?php echo texts(37, $lang); ?>
                                        <a href="auth?type=register" class="text-danger"><?php echo texts(8, $lang); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form>
                            <div class="row gy-3 overflow-hidden">
                                <div class="col-12">
                                    <label for="email" class="form-label"><?php echo texts(38,$lang);?></label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        aria-describedby="emailHelp" />
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label"><?php echo texts(39,$lang);?></label>
                                    <input type="password" class="form-control" id="password" />
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            name="remember_me"
                                            id="remember_me" />
                                        <label
                                            class="form-check-label text-secondary"
                                            for="remember_me">
                                            <?php echo texts(40,$lang);?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-danger btn-md" type="button" onclick="login()">
                                            <?php echo texts(41,$lang);?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            function login(){
                                $.ajax({
                                    type: "post",
                                    url: "api/auth",
                                    data: {login:true,mail:$("#email").val(),password:$("#password").val()},
                                    dataType: "json",
                                    success: function (response) {
                                       if(response[0]=="success"){
                                        window.location.href="reserve";
                                       } else{
                                        alert(response[1]);
                                       }
                                    }
                                });
                            }
                        </script>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>