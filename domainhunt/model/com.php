<!--

<?php

    $conn = mysqli_connect('localhost:3306','root','','fullstackphp');
    $sql = "SELECT number,fname FROM graph";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
	   $dataPoints[] = array("x"=>$row['fname'], "y"=>$row['number']);
    }

    $dataPoints1 = array();
$y = 5;
for($i = 0; $i < 10; $i++){
	$y += rand(-1, 1) * 0.1; 
	array_push($dataPoints1, array("x" => $i, "y" => $y));
}
?>

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .canvasjs-chart-credit,.canvasjs-vresion
{
    display: none !important;
}
.test{
    height:50px;
    width:100px;
    font-size: large;
}
    </style>
    <title>Document</title>

    <h1 align="center">Dashboard Companywise Lay off</h1>

 
</head>
<body>
   

<script>

window.onload = function () {

    <?php
 
$dataPoints5 = array(
	array("y" => 1700, "label" => "2020"),
	array("y" => 2500, "label" => "2021"),
	array("y" => 1500, "label" => "2022"),
	array("y" => 1633, "label" => "2023"),
	array("y" => 1604, "label" => "2024"),
	array("y" => 1575, "label" => "2025"),
	array("y" => 1547, "label" => "2026"),
    
	
);
?>
 
 var chart = new CanvasJS.Chart("chartContainer1",
    {
        animationEnabled: true,
        title: {
		text: "Byjus"
	},
    axisX: {
		title: "Year"
	},
	axisY: {
		title: "Total laid off"
	},
        data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	}]
    });
chart.render();
 
<?php
 
$dataPoints7 = array( 
	array("y" => 1400, "label" => "2020"),
	array("y" => 150, "label" => "2021"),
	array("y" => 1200, "label" => "2022"),
	array("y" => 1061, "label" => "2023"),
	array("y" => 949, "label" => "2024"),
	array("y" => 837, "label" => "2025"),
	array("y" => 725, "label" => "2026"),
);
 
?>
 
    var chart2 = new CanvasJS.Chart("chartContainer2",
    {
        animationEnabled: true,
	title: {
		text: "OLA"
	},
    axisX: {
		title: "Year"
	},
    axisY: {
		title: "Total laid off"
	},
	data: [{
		type: "column",
	//	yValueFormatString: "#,##0.00\"%\"",
	//	indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

<?php
 
$dataPoints3 = array(
	array("y" => 120, "label" => "2020"),
	array("y" => 130, "label" => "2021"),
	array("y" => 200, "label" => "2022"),
	array("y" => 40, "label" => "2023"),
	array("y" => 51, "label" => "2024"),
	array("y" => 29, "label" => "2025"),
	array("y" => 19, "label" => "2026"),
);
?>
var chart2 = new CanvasJS.Chart("chartContainer3",
    {
        animationEnabled: true,
        title: {
		text: "Bounce"
	},
    axisX: {
		title: "Year"
	},
	axisY: {
		title: "Total laid off"
	},
        data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
    });
chart2.render();

<?php
   
    $dataPoints9 = array(
        array("y" => 800, "label" => "2020"),
        array("y" => 1100, "label" => "2021"),
        array("y" => 600, "label" => "2022"),
        array("y" => 380, "label" => "2023"),
        array("y" => 278, "label" => "2024"),
        array("y" => 149, "label" => "2025"),
        array("y" => 94, "label" => "2026"),
    );
 ?>

var chart3 = new CanvasJS.Chart("chartContainer4",
    {
        animationEnabled: true,
        title: {
            text: "Swiggy"
        },
        axisX: {
		title: "Year"
	},
    axisY: {
		title: "Total laid off"
	},
        data: [
        {
            type: "column",
        //    legendMarkerType: "triangle",
        //    legendMarkerColor: "green",
          //  color: "rgba(255,12,32,.3)",
        //    showInLegend: true,
         //   legendText: "Country wise population",
            dataPoints: <?php echo json_encode($dataPoints9, JSON_NUMERIC_CHECK); ?>
        },
        ]
    });
chart3.render();

<?php
   
    $dataPoints10 = array(
        array("y" => 84, "label" => "2020"),
        array("y" => 79, "label" => "2021"),
        array("y" => 118, "label" => "2022"),
        array("y" => 130, "label" => "2023"),
        array("y" => 145, "label" => "2024"),
        array("y" => 160, "label" => "2025"),
        array("y" => 175, "label" => "2026"),
    );
 ?>
 var chart5 = new CanvasJS.Chart("chartContainer5",
    {
        animationEnabled: true,
        title: {
            text: "Meesho"
        },
        axisX: {
		title: "Year"
	},
    axisY: {
		title: "Total laid off"
	},
        data: [
        {
            type: "column",
        //    legendMarkerType: "triangle",
        //    legendMarkerColor: "green",
          //  color: "rgba(255,12,32,.3)",
        //    showInLegend: true,
         //   legendText: "Country wise population",
            dataPoints: <?php echo json_encode($dataPoints10, JSON_NUMERIC_CHECK); ?>
        },
        ]
    });
chart5.render();
<?php
   
    $dataPoints11 = array(
        array("y" => 101, "label" => "2020"),
        array("y" => 90, "label" => "2021"),
        array("y" => 100, "label" => "2022"),
        array("y" => 380, "label" => "2023"),
        array("y" => 452, "label" => "2024"),
        array("y" => 264, "label" => "2025"),
        array("y" => 312, "label" => "2026"),
    );
 ?>
 var chart6 = new CanvasJS.Chart("chartContainer6",
    {
        animationEnabled: true,
        title: {
            text: "ShareChat"
        },
        axisX: {
		title: "Year"
	},
    axisY: {
		title: "Total laid off"
	},
        data: [
        {
            type: "column",
        //    legendMarkerType: "triangle",
        //    legendMarkerColor: "green",
          //  color: "rgba(255,12,32,.3)",
        //    showInLegend: true,
         //   legendText: "Country wise population",
            dataPoints: <?php echo json_encode($dataPoints11, JSON_NUMERIC_CHECK); ?>
        },
        ]
    });
chart6.render();
}
</script>

<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="chartContainer1" style="width: 47%; height: 300px;display: inline-block;"></div> 
<div id="chartContainer2" style="width: 47%; height: 300px;display: inline-block;"></div><br/>
<div id="chartContainer3" style="width: 47%; height: 300px;display: inline-block;"></div>
<div id="chartContainer4" style="width: 47%; height: 300px;display: inline-block;"></div>
<div id="chartContainer5" style="width: 47%; height: 300px;display: inline-block;"></div>
<div id="chartContainer6" style="width: 47%; height: 300px;display: inline-block;"></div>

</body>
</html>