<?php

require './connect.php';

$sql = "SELECT * FROM labours";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  // echo "<div id='div1'><table border='2' width='100%' height='20%' style='text-align:center;font-size:50px; id='table'>
  // <tr><th>ID</th><th>NAME</th><th>WORK</th><th>SALARY</th><th>LATITUDE</th><th>LOGTITUDE</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td>". $row["salary"] . 
    "</td><td>" . $row["latitude"] . "</td><td>" . $row["logtitude"] . "</td></tr>";
  }
  echo "</table></div>";
} else {
  echo "0 results";
}
$conn->close();
?>