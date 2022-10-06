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
    <div id="divID">
        <?php
            require './connect.php';
            // $id = $_GET['id'];
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM labours where id=$id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              echo "<div id='div1' style='text-align:center;padding:15px;'><table border='2' width='100%' height='20%' style='text-align:center;font-size:25px; id='table'>
              <tr><th>NAME</th><th>WORK</th><th>SALARY</th><th>LATITUDE</th><th>LOGTITUDE</th><th>TEMPRATURE</th><th>HUMIDITY</th>
              <th>GAS</th><th>HEIGHT</th></tr>";
            // echo "<div id='div1' style='text-align:center;'><table border='1' width='100%' height='20%' style='text-align:center;font-size:30px; id='table'>";
              while($row = $result->fetch_assoc()) {
                echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td>". $row["salary"] . 
                "</td><td>" . $row["latitude"] . "</td><td>" . $row["logtitude"] . "</td><td>" . $row["temprature"] . "</td><td>"
                . $row["humidity"] . "</td><td>". $row["gas"] ."</td><td>". $row["height"] ."</td><tr>";
              }
              echo "</table></div>";
            } else {
              echo "0 results";
            }
            $conn->close();
        ?>
    </div>
    <div id="hj"></div>
    <br>
    <div id="map" style='width:100%;height:500px;'></div>

</div>
</body>
<script>
setTimeout(function(){
    $('#divID').remove();
}, 5000);
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
}, 5000);
</script>
</html>