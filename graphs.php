<?php

require './connect.php';

$sqlhb = "select * from labours where status='1'";
$resulthb = $conn->query($sqlhb);
// print_r($resulthb);

$dataPoints = array();
$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();
$dataPoints4 = array();

while($row = $resulthb->fetch_assoc())
{
    // echo $row['name'];
    array_push($dataPoints,array("y" => $row['heartbeat'], "label" => $row['name'] ));
    array_push($dataPoints1,array("y" => $row['temprature'], "label" => $row['name'] ));
    array_push($dataPoints2,array("y" => $row['humidity'], "label" => $row['name'] ));
    array_push($dataPoints3,array("y" => $row['gas'], "label" => $row['name'] ));
    array_push($dataPoints4,array("y" => $row['height'], "label" => $row['name'] ));
}

?>

<!DOCTYPE HTML>
<html>
<head>
<script>

window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "dark",
    title:{
        text: "HEARTBEAT"
    },
    axisY: {
        title: "HEARTBEAT"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer4", {
    animationEnabled: true,
    theme: "dark",
    title:{
        text: "HEIGHT"
    },
    axisY: {
        title: "HEIGHT"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer1", {
    animationEnabled: true,
    theme: "dark",
    title:{
        text: "TEMPRATURE"
    },
    axisY: {
        title: "TEMPRATURE"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer2", {
    animationEnabled: true,
    theme: "dark",
    title:{
        text: "HUMIDITY"
    },
    axisY: {
        title: "HUMIDITY"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer3", {
    animationEnabled: true,
    theme: "dark",
    title:{
        text: "GAS"
    },
    axisY: {
        title: "GAS"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();

}

setTimeout(function(){
   window.location.reload(1);
}, 5000);

</script>
</head>
<body>
<div id="chartContainer" style="height: 250px; width: 35%; margin:auto;"></div>
<div id="chartContainer1" style="height: 250px; width: 35%; margin:auto;"></div>
<div id="chartContainer2" style="height: 250px; width: 35%; margin:auto;"></div>
<div id="chartContainer3" style="height: 250px; width: 35%; margin:auto;"></div>
<div id="chartContainer4" style="height: 250px; width: 35%; margin:auto;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    