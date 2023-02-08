<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> -->

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link type="image/x-icon" href="./assets/img/favicon.png" rel="icon">
<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./assets/css/style.css">
</head>
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
					<li>
                        <a href="./sitemap.php">MINE SITE MAP</a>
                    </li>
					<li>
                        <a href="./siteDetails.html">SITE DETAILS</a>
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
</div>
<title>MINING</title>
	<section class="section section-search" style="background-image: url('./assets/img/2.png');">
		<div class="container-fluid">
			<div class="banner-wrapper">
				<div class="banner-header text-center">
					<h1 style="font-size: 80px;">Mining Technologies</h1>
				</div>
					
				<!-- Search -->
				<div class="search-box">
					<form action="#" method="post">
						<div class="form-group search-location">
							<input type="text" class="form-control" name="locationsearch" placeholder="Search Address,City,State">
							<span class="form-text" style="color: rgb(54, 52, 52);font-weight:bolder;font-size:larger;">Based on your Location</span>
						</div>
						<div class="form-group search-info">
							<input type="text" class="form-control" name="drsearch" placeholder="Search">
							<span class="form-text" style="color: rgb(54, 52, 52);font-weight:bolder;font-size:larger;">Searching Items And Price</span>
						</div>
						<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-specialities">
		<div class="container-fluid">
			<div class="section-header text-center">
				<h2>Different Mining Technologies</h2>
				<p class="sub-title">We have many high professional educated.</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-9">
					<!-- Slider -->
					<div class="specialities-slider slider">
						<!-- Slider Item -->
						<div class="speicality-item text-center">
							<div class="speicality-img">
								<img src="./assets/img/1.jpg" class="img-fluid" alt="Speciality" style="border-radius: 50%;height: 150px;">
								<span><i class="fa fa-circle" aria-hidden="true"></i></span>
							</div>
							<p>Features 1</p>
						</div>
						<div class="speicality-item text-center">
							<div class="speicality-img">
								<img src="./assets/img/3.jpg" class="img-fluid" alt="Speciality" style="border-radius: 50%;height: 150px;">
								<span><i class="fa fa-circle" aria-hidden="true"></i></span>
							</div>
							<p>Features 2</p>
						</div>
						<div class="speicality-item text-center">
							<div class="speicality-img">
								<img src="./assets/img/4.jpg" class="img-fluid" alt="Speciality" style="border-radius: 50%;height: 150px;">
								<span><i class="fa fa-circle" aria-hidden="true"></i></span>
							</div>
							<p>Features 3</p>
						</div>
						<div class="speicality-item text-center">
							<div class="speicality-img">
								<img src="./assets/img/2.webp" class="img-fluid" alt="Speciality" style="border-radius: 50%;height: 150px;">
								<span><i class="fa fa-circle" aria-hidden="true"></i></span>
							</div>
							<p>Features 4</p>
						</div>
						<div class="speicality-item text-center">
							<div class="speicality-img">
								<img src="./assets/img/1.jpeg" class="img-fluid" alt="Speciality" style="border-radius: 50%;height: 150px;">
								<span><i class="fa fa-circle" aria-hidden="true"></i></span>
							</div>
							<p>Features 5</p>
						</div>
					</div>
				</div>
			</div>
		</div>   
	</section>
		   
    </div>
    <!-- <div style="text-align:center;">
      <div id="results">
    </div>
    </div><br> -->
    <div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
											<table class="table table-bordered data-table" style="width: 100%">
											<thead>
												<tr>
                            <th>NAME</th>
                            <th>WORK</th>
                            <th>HEARTBEAT</th>
                            <!-- <th>LATITUDE</th>
                            <th>LOGTITUDE</th> -->
							<th>TEMPRATURE</th>
							<th>HUMIDITY</th>
							<th>GAS</th>
							<th>DEPTH</th>
												</tr>
											</thead>
											<tbody id="tbodytable">
												<!-- <tr>
													
												</tr> -->
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
						</div>
					</div>
    <br>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="./assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="./assets/js/popper.min.js"></script>
		<script src="./assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="./assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="./assets/js/script.js"></script>
		
	</body>

</html>

<style>
  /* Set the size of the div element that contains the map */
  #map {
      height: 200px;
      /* The height is 400 pixels */
      width: 200px;
      /* The width is the width of the web page */
    }
</style>
<!-- <div id="map"></div> -->

<script>
  setInterval(function ()
  {
    $.ajax({
      type: "GET",
      url: 'http://localhost/Hackathon 2022-01/get_data.php', // CHANGE THAT
      success: function(res){
        $('#tbodytable').html(res);
      },
      dataType:'html',
    });
  }, 1000);
</script>

<!-- <script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const location = { lat: 22.299521, lng: 70.790051 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: location,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
        position: location,
        map: map,
        });
    }
    
    window.initMap = initMap;
</script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8pAS6ZzALaUJTzJBx8_5vuYRcKdS15rE&callback=initMap&v=weekly"
  defer
></script> -->