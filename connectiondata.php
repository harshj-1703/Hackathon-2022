<?php
require './connect.php';
$sql = "SELECT connectedId FROM nodesconnection where labourId='1'";
$result = $conn->query($sql);

$sql2 = "SELECT connectedId FROM nodesconnection where labourId='2'";
$result2 = $conn->query($sql2);

$sql16 = "SELECT connectedId FROM nodesconnection where labourId='16'";
$result16 = $conn->query($sql16);

$sql17 = "SELECT connectedId FROM nodesconnection where labourId='17'";
$result17 = $conn->query($sql17);

$sql18 = "SELECT connectedId FROM nodesconnection where labourId='18'";
$result18 = $conn->query($sql18);

$sql19 = "SELECT connectedId FROM nodesconnection where labourId='19'";
$result19 = $conn->query($sql19);

$sql20 = "SELECT connectedId FROM nodesconnection where labourId='20'";
$result20 = $conn->query($sql20);

$sql21 = "SELECT connectedId FROM nodesconnection where labourId='21'";
$result21 = $conn->query($sql21);

?>
<?php
        if($result->num_rows > 0)
        {
            echo "<div class='row'>
                    <div class='col-md-12'>
                    
                        <div class='card'>
                            <div class='card-body'>
                                <div class='table-responsive'>
                                        <table class='table table-bordered data-table' style='width: 100%'>
                                        <thead>
                                        <th colspan='7'>LABOUR ID = 1</th>
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
                                        <tbody id='tbodytable'>

                                        ";
            foreach($result->fetch_all() as $dots)
            {
                // echo $dots[0]." ";
                $j = $dots[0];
                $sql11 = "SELECT * from labours where id='$j'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td>". $row["heartbeat"] . 
                            "</td><td>" . $row["temprature"] . "</td><td>"
                            . $row["humidity"] . "</td><td>". $row["gas"] ."</td><td>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
            echo "</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->
                    </div>
                    </div>";
        }
        else
        {
            echo "ALERT";
        }
        ?>

<?php
        if($result2->num_rows > 0)
        {
            echo "<div class='row'>
                    <div class='col-md-12'>
                    
                        <div class='card'>
                            <div class='card-body'>
                                <div class='table-responsive'>
                                        <table class='table table-bordered data-table' style='width: 100%'>
                                        <thead>
                                        <th colspan='7'>LABOUR ID = 2</th>
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
                                        <tbody id='tbodytable'>

                                        ";
            foreach($result2->fetch_all() as $dots)
            {
                // echo $dots[0]." ";
                $j = $dots[0];
                $sql11 = "SELECT * from labours where id='$j'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td>". $row["heartbeat"] . 
                            "</td><td>" . $row["temprature"] . "</td><td>"
                            . $row["humidity"] . "</td><td>". $row["gas"] ."</td><td>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
            echo "</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Orders -->
                    </div>
                    </div>";
        }
        else
        {
            echo "ALERT";
        }
        ?>