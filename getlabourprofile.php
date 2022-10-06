<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8pAS6ZzALaUJTzJBx8_5vuYRcKdS15rE&callback=initMap&v=weekly"
  defer
></script>

<?php
session_start();
require './connect.php';
// $id = $_GET['id'];
$id = $_SESSION['id'];
$sql = "SELECT * FROM labours where id=$id";
$ll = "SELECT latitude,logtitude FROM labours where id=$id";
$result = $conn->query($sql);
$resultll = $conn->query($ll);
$row1 = $resultll->fetch_assoc();

if ($result->num_rows > 0) {
  // output data of each row
  echo "<div id='div1' style='text-align:center;'><table border='2' width='100%' height='20%' style='text-align:center;font-size:30px; id='table'>
  <tr><th>NAME</th><th>WORK</th><th>SALARY</th><th>LATITUDE</th><th>LOGTITUDE</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td>". $row["salary"] . 
    "</td><td>" . $row["latitude"] . "</td><td>" . $row["logtitude"] . "</td></tr>";
  }
  echo "</table></div>";
  // echo $row1["latitude"];
} else {
  echo "0 results";
}
$conn->close();
?>

<div id="latitude" style="display:none;"> <?php echo $row1['latitude']; ?> </div>
<div id="logtitude" style="display:none;"> <?php echo $row1['logtitude']; ?> </div>

<script>
  var latbhai = document.getElementById('latitude').innerHTML;
  var logbhai = document.getElementById('logtitude').innerHTML;
  // Initialize and add the map
  function initMap() {
      latbhai = parseFloat(latbhai);
      logbhai = parseFloat(logbhai);
      console.log(latbhai);
      console.log(logbhai);
      const location = { lat: latbhai, lng: logbhai };
      const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 20,
      center: location,
      });
      // The marker, position
      const marker = new google.maps.Marker({
      position: location,
      map: map,
      });
  }
  window.initMap = initMap;
</script>