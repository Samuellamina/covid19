<?php
$x = json_decode(file_get_contents('c:/wamp64/www/covid19/covid19api.txt'), true);


$state1 = $x['data']['states'][0]['state'];
    $confirmedCases1 = $x['data']['states'][0]['confirmedCases'];
    
    
    
    $state2 = $x['data']['states'][1]['state'];
    $confirmedCases2 = $x['data']['states'][1]['confirmedCases'];
    $state3 = $x['data']['states'][2]['state'];
    $confirmedCases3 = $x['data']['states'][2]['confirmedCases'];
    $state4 = $x['data']['states'][3]['state'];
    $confirmedCases4 = $x['data']['states'][3]['confirmedCases'];
    $state5 = $x['data']['states'][4]['state'];
    $confirmedCases5 = $x['data']['states'][4]['confirmedCases'];
    $state6 = $x['data']['states'][5]['state'];
    $confirmedCases6 = $x['data']['states'][5]['confirmedCases'];
    $state7 = $x['data']['states'][6]['state'];
    $confirmedCases7 = $x['data']['states'][6]['confirmedCases'];
    $state8 = $x['data']['states'][7]['state'];
    $confirmedCases8 = $x['data']['states'][7]['confirmedCases'];
    $state9 = $x['data']['states'][8]['state'];
    $confirmedCases9 = $x['data']['states'][8]['confirmedCases'];
    $state10 = $x['data']['states'][9]['state'];
    $confirmedCases10 = $x['data']['states'][9]['confirmedCases'];
    $state11 = $x['data']['states'][10]['state'];
    $confirmedCases11 = $x['data']['states'][10]['confirmedCases'];
    $state12 = $x['data']['states'][11]['state'];
    $confirmedCases12 = $x['data']['states'][11]['confirmedCases'];
    $state13 = $x['data']['states'][12]['state'];
    $confirmedCases13 = $x['data']['states'][12]['confirmedCases'];
    $state14 = $x['data']['states'][13]['state'];
    $confirmedCases14 = $x['data']['states'][13]['confirmedCases'];
    $state15 = $x['data']['states'][14]['state'];
    $confirmedCases15 = $x['data']['states'][14]['confirmedCases'];
    $state16 = $x['data']['states'][15]['state'];
    $confirmedCases16 = $x['data']['states'][15]['confirmedCases'];
    $state17 = $x['data']['states'][16]['state'];
    $confirmedCases17 = $x['data']['states'][16]['confirmedCases'];
    $state18 = $x['data']['states'][17]['state'];
    $confirmedCases18 = $x['data']['states'][17]['confirmedCases'];
    $state19 = $x['data']['states'][18]['state'];
    $confirmedCases19 = $x['data']['states'][18]['confirmedCases'];
    $state20 = $x['data']['states'][19]['state'];
    $confirmedCases20 = $x['data']['states'][19]['confirmedCases'];
    $state21 = $x['data']['states'][20]['state'];
    $confirmedCases21 = $x['data']['states'][20]['confirmedCases'];
    $state22 = $x['data']['states'][21]['state'];
    $confirmedCases22 = $x['data']['states'][21]['confirmedCases'];
    $state23 = $x['data']['states'][22]['state'];
    $confirmedCases23 = $x['data']['states'][22]['confirmedCases'];
    $state24 = $x['data']['states'][23]['state'];
    $confirmedCases24 = $x['data']['states'][23]['confirmedCases'];
    $state25 = $x['data']['states'][24]['state'];
    $confirmedCases25= $x['data']['states'][24]['confirmedCases'];
    $state26 = $x['data']['states'][25]['state'];
    $confirmedCases26 = $x['data']['states'][25]['confirmedCases'];
    $state27 = $x['data']['states'][26]['state'];
    $confirmedCases27 = $x['data']['states'][26]['confirmedCases'];
    $state28 = $x['data']['states'][27]['state'];
    $confirmedCases28 = $x['data']['states'][27]['confirmedCases'];
    $state29 = $x['data']['states'][28]['state'];
    $confirmedCases29 = $x['data']['states'][28]['confirmedCases'];
    $state30 = $x['data']['states'][29]['state'];
    $confirmedCases30 = $x['data']['states'][29]['confirmedCases'];
    $state31 = $x['data']['states'][30]['state'];
    $confirmedCases31 = $x['data']['states'][30]['confirmedCases'];
    $state32 = $x['data']['states'][31]['state'];
    $confirmedCases32 = $x['data']['states'][31]['confirmedCases'];
    $state33 = $x['data']['states'][32]['state'];
    $confirmedCases33 = $x['data']['states'][32]['confirmedCases'];
    $state34 = $x['data']['states'][33]['state'];
    $confirmedCases34 = $x['data']['states'][33]['confirmedCases'];
    $state35 = $x['data']['states'][34]['state'];
    $confirmedCases35= $x['data']['states'][34]['confirmedCases'];
    $state36 = $x['data']['states'][35]['state'];
    $confirmedCases36 = $x['data']['states'][35]['confirmedCases'];

// states
 

$dataPoints = array(
	array("label"=> $state1, "y"=> $confirmedCases1  ),
    array("label"=> $state2, "y"=> $confirmedCases2  ),
    array("label"=> $state3, "y"=> $confirmedCases3  ),
    array("label"=> $state4, "y"=> $confirmedCases4  ),
    array("label"=> $state5, "y"=> $confirmedCases5  ),
    array("label"=> $state6, "y"=> $confirmedCases6  ),
    array("label"=> $state7, "y"=> $confirmedCases7  ),
    array("label"=> $state8, "y"=> $confirmedCases8 ),
    array("label"=> $state9, "y"=> $confirmedCases9 ),
    array("label"=> $state10, "y"=> $confirmedCases10 ),
    array("label"=> $state11, "y"=> $confirmedCases11 ),
    array("label"=> $state12, "y"=> $confirmedCases12 ),
    array("label"=> $state13, "y"=> $confirmedCases13 ),
    array("label"=> $state14, "y"=> $confirmedCases14 ),
    array("label"=> $state15, "y"=> $confirmedCases15 ),
    array("label"=> $state16, "y"=> $confirmedCases16 ),
    array("label"=> $state17, "y"=> $confirmedCases17 ),
    array("label"=> $state18, "y"=> $confirmedCases18 ),
    array("label"=> $state19, "y"=> $confirmedCases19 ),
    array("label"=> $state20, "y"=> $confirmedCases20 ),
    array("label"=> $state21, "y"=> $confirmedCases21 ),
    array("label"=> $state22, "y"=> $confirmedCases22 ),
    array("label"=> $state23, "y"=> $confirmedCases23 ),
    array("label"=> $state24, "y"=> $confirmedCases24 ),
    array("label"=> $state25, "y"=> $confirmedCases25 ),
    array("label"=> $state26, "y"=> $confirmedCases26 ),
    array("label"=> $state27, "y"=> $confirmedCases27 ),
    array("label"=> $state28, "y"=> $confirmedCases28 ),
    array("label"=> $state29, "y"=> $confirmedCases29 ),
    array("label"=> $state30, "y"=> $confirmedCases30 ),
    array("label"=> $state31, "y"=> $confirmedCases31 ),
    array("label"=> $state32, "y"=> $confirmedCases32 ),
    array("label"=> $state33, "y"=> $confirmedCases33 ),
    array("label"=> $state34, "y"=> $confirmedCases34  ),
    array("label"=> $state35, "y"=> $confirmedCases35 ),
    array("label"=> $state36, "y"=> $confirmedCases36  )
);
// nice

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
	exportEnabled: true,
	title:{
		text: "COVID-19 CONFIRMED CASES IN NIGERIA PER STATE"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
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

         	
			  <li class=""><a href="/covid19/general.php"><i class="fa fa-wrench"></i> <span>Covid Analysis</span></a>
				
				 <li class=""><a href="/covid19/general1.php"><i class="fa fa-wrench"></i> <span>Covid Live Data Analysis</span></a>
                 <li class=""><a href="time.php"><i class="fa fa-star"></i> <span>Covid Analysis Visual Tools</span></a>
                    <li class="" ><a href="/covid19/index.php" ><i class="fa fa-wrench"></i><span>Logout</span></a></li>


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
                        <h4>Tasks</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">   Visual Tools
                       
                    </div>
                    <div class="panel-body">
					
					<form action="visual3.php">
    <strong><input type="submit" value="Go to detailed state views" />
</form>


<div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    </div>

                </div>
				
            </div><!-- contentpanel -->


        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>


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

?>