<?php
require './connect.php';
$sql = "SELECT id,connectedId FROM nodesconnection where labourId='1' and status='1'";
$result = $conn->query($sql);

$sql2 = "SELECT id,connectedId FROM nodesconnection where labourId='2' and status='1'";
$result2 = $conn->query($sql2);

$sql16 = "SELECT id,connectedId FROM nodesconnection where labourId='16' and status='1'";
$result16 = $conn->query($sql16);

$sql17 = "SELECT id,connectedId FROM nodesconnection where labourId='17' and status='1'";
$result17 = $conn->query($sql17);

$sql18 = "SELECT id,connectedId FROM nodesconnection where labourId='18' and status='1'";
$result18 = $conn->query($sql18);

$sql19 = "SELECT id,connectedId FROM nodesconnection where labourId='19' and status='1'";
$result19 = $conn->query($sql19);

$sql20 = "SELECT id,connectedId FROM nodesconnection where labourId='20' and status='1'";
$result20 = $conn->query($sql20);

$sql21 = "SELECT id,connectedId FROM nodesconnection where labourId='21' and status='1'";
$result21 = $conn->query($sql21);

?>
<?php
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
        if($result->num_rows > 0)
        {
            foreach($result->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $k = $dots[0];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                        while($row = $result11->fetch_assoc())
                        {
                            echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td>
                            <td class='hb'>". $row["heartbeat"] . 
                                "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                                . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                        }
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>

<?php
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
        if($result2->num_rows > 0)
        {
            foreach($result2->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td class='hb'>". $row["heartbeat"] . 
                            "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                            . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>

<?php
        echo "<div class='row'>
                <div class='col-md-12'>
                
                    <div class='card'>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                    <table class='table table-bordered data-table' style='width: 100%'>
                                    <thead>
                                    <th colspan='7'>LABOUR ID = 16</th>
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
        if($result16->num_rows > 0)
        {
            foreach($result16->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td class='hb'>". $row["heartbeat"] . 
                            "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                            . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>

<?php
        echo "<div class='row'>
                <div class='col-md-12'>
                
                    <div class='card'>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                    <table class='table table-bordered data-table' style='width: 100%'>
                                    <thead>
                                    <th colspan='7'>LABOUR ID = 17</th>
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
        if($result17->num_rows > 0)
        {
            foreach($result17->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td class='hb'>". $row["heartbeat"] . 
                            "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                            . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>

<?php
        echo "<div class='row'>
                <div class='col-md-12'>
                
                    <div class='card'>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                    <table class='table table-bordered data-table' style='width: 100%'>
                                    <thead>
                                    <th colspan='7'>LABOUR ID = 18</th>
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
        if($result18->num_rows > 0)
        {
            foreach($result18->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td class='hb'>". $row["heartbeat"] . 
                            "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                            . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>

<?php
        echo "<div class='row'>
                <div class='col-md-12'>
                
                    <div class='card'>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                    <table class='table table-bordered data-table' style='width: 100%'>
                                    <thead>
                                    <th colspan='7'>LABOUR ID = 19</th>
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
        if($result19->num_rows > 0)
        {
            foreach($result19->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td class='hb'>". $row["heartbeat"] . 
                            "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                            . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>

<?php
        echo "<div class='row'>
                <div class='col-md-12'>
                
                    <div class='card'>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                    <table class='table table-bordered data-table' style='width: 100%'>
                                    <thead>
                                    <th colspan='7'>LABOUR ID = 20</th>
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
        if($result20->num_rows > 0)
        {
            foreach($result20->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td class='hb'>". $row["heartbeat"] . 
                            "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                            . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>

<?php
        echo "<div class='row'>
                <div class='col-md-12'>
                
                    <div class='card'>
                        <div class='card-body'>
                            <div class='table-responsive'>
                                    <table class='table table-bordered data-table' style='width: 100%'>
                                    <thead>
                                    <th colspan='7'>LABOUR ID = 21</th>
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
        if($result21->num_rows > 0)
        {
            foreach($result21->fetch_all() as $dots)
            {
                // echo $dots[1]." ";
                $j = $dots[1];
                $sql11 = "SELECT * from labours where id='$j' and status='1'";
                $result11 = $conn->query($sql11);
                if($result11->num_rows > 0)
                {
                    while($row = $result11->fetch_assoc())
                    {
                        echo "<tr><td><a href='./labourprofile.php?id=".$row['id']."'>" . $row["name"]. "</a></td><td>" . $row["work"]. "</td><td class='hb'>". $row["heartbeat"] . 
                            "</td><td class='temp'>" . $row["temprature"] . "</td><td class='humidity'>"
                            . $row["humidity"] . "</td><td class='gas'>". $row["gas"] ."</td><td class='height'>". $row["height"] ."</td><tr>";
                    }
                
                }
            }
        }
        else
        {
            echo "<tr align='center' style='color:white;background-color:red;'><td colspan='7'>NO CONNECTED NODES</td></tr>";
        }
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Recent Orders -->
                </div>
                </div>";
        ?>