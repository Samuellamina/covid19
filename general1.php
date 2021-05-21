<?php
session_start();


//include_once('numbers/validate05.inc');
include_once('incl/config.php');
//$name = $_SESSION['who'];
//$role = $_SESSION['role'];
	//$_SESSION['role'] = $role;
	
if (isset($_POST['submit'])) {


$class = $_POST['class'];
$codefile = "uploads/". $class .".java";


$code;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	
	//echo file_get_contents($_FILES['uploadedfile']['tmp_name']); 
	$code = file_get_contents($_FILES['uploadedfile']['tmp_name']); 
	
	//$codefile = "uploads/code.txt";


 //$myfile = "uploads/mydata.txt";
    $fh = fopen($codefile, 'w') or die("can't open file");
    fwrite($fh, $code);
    fclose($fh);

	$_SESSION['class'] = $class;
	
	$pathfile  = "uploads/file.txt";
	
	 $fh1 = fopen($pathfile, 'w') or die("can't open file");
    fwrite($fh1, $class.'.java');
    fclose($fh1);
	
	
	
	
	header("location: user.php");
	
	
	
	
	//header("location: result.php");
	
}
else {
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.com/demo/webpage/chain/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 09:51:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COVID-19 DATA ANALYSIS SYSTEM</title>

    <link href="admin/demo/webpage/chain/css/style.default.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/select2.css" rel="stylesheet" />
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/tunjicss.css" rel="stylesheet">
</head>

<body>

<header>
    <div class="headerwrapper">
       <span class="span-header">COVID19 DATA ANALYSIS SYSTEM</span>
        
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

            <h5 class="leftpanel-title">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">

               
				
				
				
				
                    <li class="" ><a href="../" ><i class="fa fa-wrench"></i><span>Logout</span></a></li>


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
                            <li>User</li>
                        </ul>
                        <h4>COVID-19 ANALYSIS IN NIGERIA AS AT <?php  $date = time(); echo date('m/d/Y', $date); ?></h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">COVID-19 ANALYSIS IN NIGERIA AS AT <?php  $date = time(); echo date('m/d/Y', $date); ?>  
                        <div class="pull-right">
                            <a title="Visual Tools" href="time.php"><span class="fa fa-plus-circle fa-2x" style="color: #fff;"></span></a> 
							
							
                        </div>

                    </div>
                    <div class="panel-body">
					
					<table class="table table-default mb30 table-striped table-bordered">
					 <thead>
					<tr><th>Total Sample Tested</th><th>Total Confirmed Cases</th><th>Total Active Cases</th><th>Discharged</th><th>Death</th></tr>
					
					 </thead>
					
					<tbody>
					
					<?php
					
					//$records = json_decode(file_get_contents('covid19api.txt'), true);
					
					$records = json_decode(file_get_contents("https://covidnigeria.herokuapp.com/api"), true);
					
					$records2 = $records;
			
			
			
			
					//foreach($records['data'] as $record){

echo '<tr class="odd"><td>'.$records['data']['totalSamplesTested'].'</td><td>'.$records['data']['totalConfirmedCases'].'</td><td>'.$records['data']['totalActiveCases'].'</td><td>'.$records['data']['discharged'].'</td><td>'.$records['data']['death'].'</td></td></tr>';
		
//echo '<tr class="odd"><td>'.$record['state'].'</td><td>'.$record['totalSamplesTested'].'</td><td height="30px">'.$record['totalConfirmedCases'].'</td><td>'.$record['totalActiveCases'].'</td><td>'.$record['discharged'].'</td><td>'.$record['death'].'</td></td></tr>';
	
		

//}
	echo '</tbody>';
echo '</table>';
				
					
					
					//echo '<pre>';
					//print_r($records);
					//echo '</pre>';
					
					
					
					
					?>
					
					
					


						<h3>Distribution By States</h3>
						
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search">	
					<table id="myTable"class="table table-default mb30 table-striped table-bordered">
					 <thead>
					<tr><th onclick="sortTable(0)">State</th><th onclick="sortTable(0)">Total Confirmed Cases</th><th>Total Active Cases</th><th>Discharged</th><th>Death</th></tr>
					
					 </thead>
					
					<tbody>
					
					<?php
					
					//$records = json_decode(file_get_contents('covid19api.txt'), true);
			
			
			$statesrec = $records['data']['states'];
			$i =0;
			foreach($records['data']['states'] as $record){
			
			echo '<tr class="odd"><td>'.$record['state'].'</td><td>'.$record['confirmedCases'].'</td><td>'.$record['casesOnAdmission'].'</td><td>'.$record['discharged'].'</td><td>'.$record['death'].'</td></tr>';
			
			
			$i = $i+1;

			}
			/*
			foreach($statesrec as $key=>$value){
        
             
			
					//foreach($records['data'] as $record){
					

echo '<tr class="odd"><td>'.$key['state'].'</td><td>'.$key['states']['confirmedCases'].'</td><td>'.$key['states']['casesOnAdmission'].'</td><td>'.$key['states']['discharged'].'</td><td>'.$key['states']['death'].'</td></td></tr>';
		
//echo '<tr class="odd"><td>'.$record['state'].'</td><td>'.$record['totalSamplesTested'].'</td><td height="30px">'.$record['totalConfirmedCases'].'</td><td>'.$record['totalActiveCases'].'</td><td>'.$record['discharged'].'</td><td>'.$record['death'].'</td></td></tr>';
}	
*/		

//}
	echo '</tbody>';
echo '</table>';
				
					
					
					//echo '<pre>';
					//print_r($records);
					//echo '</pre>';
					
					
					
					
					?>
					
						
						
						
						
						
						
						
						
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
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

</body>

<!-- Mirrored from themepixels.com/demo/webpage/chain/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 09:52:42 GMT -->
</html>
<?php
}

?>