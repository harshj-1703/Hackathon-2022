<!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
<?php

require './connect.php';

$sql = "SELECT * FROM labours";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table border='2' width='100%' height='20%' style='text-align:center;font-size:50px; id='table'>
  <tr><th>ID</th><th>NAME</th><th>WORK</th><th>SALARY</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["work"]. "</td><td>". $row["salary"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>

<script>
    setTimeout(function () 
    {
        location.reload();
    }, 5000);
</script>