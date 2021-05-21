<?php
 
 $x = json_decode(file_get_contents('c:/wamp64/www/covid19/covid19api.txt'), true);

 $samplesTested = $x['data']['totalSamplesTested'];
 $confirmedCases = $x['data']['totalConfirmedCases'];
 $activeCases = $x['data']['totalActiveCases'];
 $discharged = $x['data']['discharged'];
 $deaths = $x['data']['death'];


$dataPoints = array( 
     array("label"=>"Total Number of Confirmed Cases","y"=>$confirmedCases),
     array("label"=>"Total Number of Active Cases", "y"=>$activeCases),
     array("label"=>"Number of People Discharged", "y"=>$discharged),
     array("label"=>"Number of Deaths", "y"=>$deaths)
)
 
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
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Covid-19 Cases in Nigeria"
	},
	data: [{
		type: "doughnut",
		indexLabel: "{symbol}  {y}",
		yValueFormatString: "#,##0",
		showInLegend: true,
		legendText: "{label} : {y}",
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
                    <div  class="panel-heading">Visual Tools
                       
                    </div>
                    <div class="panel-body">
		
					<div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    <strong>total number of cases in Nigeria is: <?php echo $samplesTested?>

                    <form action="visual.php">
                        <input type="submit" value="See the States" />
                    </form>
						
						
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

