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
<?php
    include('header.php');
    ?>

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

    <h1 align="center">Dashboard (Present data of Full-Stack )</h1>

 
</head>
<body>
   
<br>
<br>
<h2 style="text-align:center">Full Stack Developer(Present Data)</h2>
<script>

window.onload = function () {

    <?php
 
$dataPoints5 = array(
	array("label" => "2012" , "y" => 650),
	array("label" => "2013" , "y" => 700),
	array("label" => "2014", "y" => 710),
	array("label" => "2015", "y" => 658),
	array("label" => "2016" , "y" => 734),
	array("label" => "2017" , "y" => 963),
	array("label" => "2018" , "y" => 847),
	array("label" => "2019" , "y" => 853),
	array("label" => "2020", "y" => 869),
	array("label" => "2021" , "y" => 943),
    array("label" => "2022", "y" => 734)
	
);
?>
 
 var chart = new CanvasJS.Chart("chartContainer1",
    {
        animationEnabled: true,
        title: {
		text: "Year v/s Total laid off"
	},
    axisX: {
		title: "Year"
	},
	axisY: {
		title: "Total laid off"
	},
        data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	}]
    });
chart.render();
 
<?php
 
$dataPoints7 = array( 
	array("label"=>"Software Developer", "y"=>55),
	array("label"=>"Full Stack Developer", "y"=>20),
	array("label"=>"Data Analyst/Scientist", "y"=>12),
	array("label"=>"DevOps", "y"=>3),
	array("label"=>"Web Developer", "y"=>4),
	array("label"=>"AI Engeineer", "y"=>6)
);
 
?>
 
    var chart2 = new CanvasJS.Chart("chartContainer2",
    {
        animationEnabled: true,
	title: {
		text: "DomainWise Weight"
	},
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

<?php
 
$dataPoints3 = array(
	array("y" => 72, "label" => "Crypto"),
	array("y" => 287, "label" => "Healthcare"),
	array("y" => 855, "label" => "Consumer"),
	array("y" => 60, "label" => "Media"),
	array("y" => 10, "label" => "Logistics"),
	array("y" => 1917, "label" => "Education"),
	array("y" => 962, "label" => "Retail"),
    array("y" => 139, "label" => "Marketing"),
    array("y" => 1431, "label" => "Transportation"),
    array("y" => 1250, "label" => "Food"),
    array("y" => 993, "label" => "Finance"),
);
?>
var chart2 = new CanvasJS.Chart("chartContainer3",
    {
        animationEnabled: true,
        title: {
		text: "Industry v/s Total laid off"
	},
    axisX: {
		title: "Industry"
	},
	axisY: {
		title: "Total laid off"
	},
        data: [{
		type: "bar",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
    });
chart2.render();

<?php
   
    $dataPoints9 = array(
        array("y" => 3723, "label" => "Bengaluru"),
        array("y" => 1739, "label" => "Mumbai"),
        array("y" => 573, "label" => "New Delhi"),
        array("y" => 1614, "label" => "Gurugram"),
        array("y" => 73, "label" => "Indore"),
        array("y" => 43, "label" => "Patna"),
        array("y" => 325, "label" => "Hyderabad"),
        array("y" => 173, "label" => "Noida"),
        array("y" => 89, "label" => "Chennai"),
        array("y" => 324, "label" => "Ahmedabad"),
        array("y" => 467, "label" => "Pune"),
    );
 ?>

var chart3 = new CanvasJS.Chart("chartContainer4",
    {
        animationEnabled: true,
        title: {
            text: "Location vs Total Laid Off"
        },
        axisX: {
		title: "Location"
	},
        data: [
        {
            type: "splineArea",
        //    legendMarkerType: "triangle",
        //    legendMarkerColor: "green",
            color: "rgba(255,12,32,.3)",
        //    showInLegend: true,
         //   legendText: "Country wise population",
            dataPoints: <?php echo json_encode($dataPoints9, JSON_NUMERIC_CHECK); ?>
        },
        ]
    });
chart3.render();
 
}
</script>

<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="chartContainer1" style="width: 45%; height: 300px;display: inline-block;"></div> 
<div id="chartContainer2" style="width: 45%; height: 300px;display: inline-block;"></div><br/>
<div id="chartContainer3" style="width: 50%; height: 300px;display: inline-block;"></div>
<div id="chartContainer4" style="width: 45%; height: 300px;display: inline-block;"></div>

<div align="center" ><button class="test"><b><a href="model/fullstack.php">Predict</a></b></button></div>


</body>
</html>