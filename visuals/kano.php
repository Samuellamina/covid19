<?php
$x = json_decode(file_get_contents('c:/wamp64/www/covid19/covid19api.txt'), true);
 
$state1 = $x['data']['states'][8]['state'];
		$confirmedCases1 = $x['data']['states'][8]['confirmedCases'];
		$casesOnAdmission = $x['data']['states'][8]['casesOnAdmission'];
		$discharged = $x['data']['states'][8]['discharged'];
		$death = $x['data']['states'][8]['death'];
// states and their datas end...

$dataPoints1 = array(
	array("label"=> $state1, "y"=> $confirmedCases1  )
);

$dataPoints2 = array(
	array("label"=> $state1, "y"=> $casesOnAdmission  )
);

$dataPoints3 = array(
	array("label"=> $state1, "y"=> $discharged  )
);

$dataPoints4 = array(
	array("label"=> $state1, "y"=> $death  )
);

	
?>
<!DOCTYPE HTML>
<html>
<head>  
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COVID 19</title>

    <link href="admin/demo/webpage/chain/css/style.default.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/select2.css" rel="stylesheet" />
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/tunjicss.css" rel="stylesheet">
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Per State Visualization"
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Confirmed Cases",
		indexLabel: "{y}",
		yValueFormatString: "#,0##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Cases on Admission",
		indexLabel: "{y}",
		yValueFormatString: "#,0##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Discharged",
		indexLabel: "{y}",
		yValueFormatString: "#,0##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Deaths",
		indexLabel: "{y}",
		yValueFormatString: "#,0##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]

	
});

chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>


</head>
<body>

<header>
    <div class="headerwrapper">
       <span class="span-header">COVID-19 DATA ANALYSIS SYSTEM</span>
        
    </div><!-- headerwrapper -->
 <a  class="logo">
                <img src="admin/demo/webpage/chain/images/babcock.png" alt="" />
            </a>
</header>

<section>
    <div class="mainwrapper">
        <div class="leftpanel">
            <div class="media profile-left">
                <a class="pull-left profile-thumb" href="">
                    <img class="img-circle" src="admin/images/noimage.jpg" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"> <?php// echo $name; ?> </h4>
                    <small class="text-muted"></small>
                </div>
            </div><!-- media -->

            <h5 class="leftpanel-title">nav</h5>
            <ul class="nav nav-pills nav-stacked">

               
				
				 
				
			  <li class=""><a href="general.php"><i class="fa fa-wrench"></i> <span>Covid Analysis</span></a>
				
				 <li class=""><a href="general1.php"><i class="fa fa-wrench"></i> <span>Covid Live Data Analysis</span></a>
                 <li class=""><a href="visuals/time.php"><i class="fa fa-star"></i> <span>Covid Analysis Visual Tools</span></a>
                    <li class="" ><a href="index.php" ><i class="fa fa-wrench"></i><span>Logout</span></a></li>


            </ul>

        </div><!-- leftpanel -->

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fa fa-user "></i></a></li>
                            <li>Administrators</li>
                        </ul>
                        <h4></h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">Users Panel
                       
                    </div>
                    <div class="panel-body">
					<label for="cars">Choose a State:</label>

<select name="states_of_nigeria" onchange="location = this.value;" id="select">
<option>STATES</option>
<option value="fct.php">ABUJA FCT</option>
<option value="edo.php">EDO</option>
<option value="kaduna.php">KADUNA</option>
<option value="kano.php">KANO</option>
<option value="lagos.php">LAGOS</a></option>
<option value="ogun.php">OGUN</option>
<option value="ondo.php">ONDO</option>
<option value="oyo.php">OYO</option>
<option value="plateau.php">PLATEAU</option>
<option value="rivers.php">RIVERS</option>
	<option>ABIA</option>
	<option>ADAMAWA</option>
	<option>AKWA IBOM</option>
	<option>ANAMBRA</option>
	<option>BAUCHI</option>
	<option>BAYELSA</option>
	<option>BENUE</option>
	<option>BORNO</option>
	<option>CROSS RIVER</option>
	<option>DELTA</option>
	<option>EBONYI</option>
	<option>EKITI</option>
	<option>ENUGU</option>
	<option>GOMBE</option>
	<option>IMO</option>
	<option>JIGAWA</option>
	<option>KATSINA</option>
	<option>KEBBI</option>
	<option>KOGI</option>
	<option>KWARA</option>
	<option>NASSARAWA</option>
	<option>NIGER</option>
	<option>OSUN</option>
	<option>SOKOTO</option>
	<option>TARABA</option>
	<option>YOBE</option>
	<option>ZAMFARA</option>
</select>
					<div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    </div>

                </div>
				
            </div><!-- contentpanel -->


        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>



<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="admin/demo/webpage/chain/js/jquery-1.11.1.min.js"></script>
<script src="admin/demo/webpage/chain/js/jquery-migrate-1.2.1.min.js"></script>
<script src="admin/demo/webpage/chain/js/bootstrap.min.js"></script>
<script src="admin/demo/webpage/chain/js/modernizr.min.js"></script>
<script src="admin/demo/webpage/chain/js/pace.min.js"></script>
<script src="admin/demo/webpage/chain/js/retina.min.js"></script>
<script src="admin/demo/webpage/chain/js/jquery.cookies.js"></script>

<script src="admin/demo/webpage/chain/js/flot/jquery.flot.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.resize.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.symbol.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.crosshair.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.categories.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.pie.min.js"></script>
<script src="admin/demo/webpage/chain/js/morris.min.js"></script>
<script src="admin/demo/webpage/chain/js/raphael-2.1.0.min.js"></script>
<script src="admin/demo/webpage/chain/js/jquery.sparkline.min.js"></script>

<script src="admin/demo/webpage/chain/js/custom.js"></script>
<script src="admin/demo/webpage/chain/js/charts.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>