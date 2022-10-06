<?php
session_start();
$_SESSION['id'] = $_GET['id'];
// echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LABOURPROFILE - <?php echo $_GET['id']; ?></title>
    <link type="image/x-icon" href="./assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<div class="main-wrapper">
    <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a href="#" class="">
                    <img src="./assets/img/1.png" class="img-fluid" alt="Logo" height="60" width="60">
                </a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="main-menu-wrapper">
                <ul class="main-nav">
                    <li class="">
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="./login.html">Login</a>
                    </li>
                </ul>		 
            </div>		 
            <ul class="nav header-navbar-rht">
                <li class="nav-item contact-item">
                    <div class="header-contact-img">
						<img src="./assets/img/2.png" alt="" height="40" width="40">
                    </div>
                    <div class="header-contact-detail">
                        <p class="contact-header">Contact</p>
                        <p class="contact-info-header"> +91 81282 03856</p>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="./login.html">login / Signup </a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="hj"></div>
    <br>
    <div id="map" style='width:100%;height:500px;'></div>

</div>
</body>
<script>
  setInterval(function ()
  {
    $.ajax({
      type: "GET",
      url: 'http://localhost/Hackathon 2022/getlabourprofile.php',
      success: function(res){
        $('#hj').html(res);
      },
      dataType:'html',
    });
  }, 2000);
</script>
</html>