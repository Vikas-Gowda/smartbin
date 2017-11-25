<!DOCTYPE html>
<html>
<?php  //Start the Session
session_start();
if(!$_SESSION['username'])  
{  
  
    header("Location: index.html");//redirect to login page to secure the welcome page without login access.  
}  
define("DB_SERVER", "localhost");
define("DB_USER", "id985784_smartbin");
define("DB_PASSWORD", "amith9481447790");
define("DB_DATABASE", "id985784_id985784_amith");
$count=0;
$connection = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
//3. If the form is submitted or not.
//3.1 If the form is submitted


//3.1.2 Checking the values are existing in the database or not
$query1 = "select * from bin1";
 $query2 = "select * from bin2";
 $query3 = "select * from bin3";
 $query4 = "select * from bin4";
$result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));
$result2 = mysqli_query($connection, $query2) or die(mysqli_error($connection));
$result3 = mysqli_query($connection, $query3) or die(mysqli_error($connection));
$result4 = mysqli_query($connection, $query4) or die(mysqli_error($connection));

if ($result1=mysqli_query($connection,$query1))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result1))
    {
    $m1=$row[0];
	$n1=$row[1];
	$p1=$row[2];
	$q1=$row[3];
	$t1=$row[4];
	$lt1=$row[5];
	$ln1=$row[6];
	
	if($m1>=90)
	{
	$bin1="Bin-no 1";
    $b1msg="I am filled need to be dumped.";
	$b1c=1;
	}
	else
	{
	$bin1="";
    $b2msg="";
	$br1="display: none;";
	$b1c=0;
	
	}
    }
  // Free result set
  mysqli_free_result($result1);
}
if ($result2=mysqli_query($connection,$query2))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result2))
    {
    $m2=$row[0];
	$n2=$row[1];
	$p2=$row[2];
	$q2=$row[3];
	$t2=$row[4];
	$lt2=$row[5];
	$ln3=$row[6];
	
	if($m2>=90)
	{
	$bin2="Bin-no 2";
    $b2msg="I am filled need to be dumped.";
	
	$b2c=1;
	}
	else
	{
	$bin2="";
    $b2msg="";
	$br2="display: none;";
	$b2c=0;
		
	}
    }
  // Free result set
  mysqli_free_result($result2);
}
if ($result3=mysqli_query($connection,$query3))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result3))
    {
    $m3=$row[0];
	$n3=$row[1];
	$p3=$row[2];
	$q3=$row[3];
	$t3=$row[4];
	$lt3=$row[5];
	$ln3=$row[6];
	
	if($m3>=90)
	{
	$bin3="Bin-no 3";
    $b3msg="I am filled need to be dumped.";
	$b3c=1;
	}
	else
	{
	$bin3="";
    $b3msg="";
	$br3="display: none;";
	$b3c=0;
	}
    }
  // Free result set
  mysqli_free_result($result3);
}
if ($result4=mysqli_query($connection,$query4))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result4))
    {
    $m4=$row[0];
	$n4=$row[1];
	$p4=$row[2];
	$q4=$row[3];
	$t4=$row[4];
	$lt4=$row[5];
	$ln4=$row[6];
	
	if($m4>=90)
	{
	$bin4="Bin-no 4";
    $b4msg="I am filled need to be dumped.";
    $br4="";	
	$b4c=1;
	}
	else
	{
	$bin4="";
    $b4msg="";	
	$br4="display: none;";
	$b4c=0;
	$t4=$row[4];
	$lt4=$row[5];
	$ln4=$row[6];
	}
    }
  // Free result set
  mysqli_free_result($result4);
  if($bin1==""&&$bin2==""&&$bin3==""&&$bin4=="")
  {
	  $msg="No messages to shown.";
	  $br1="display: none;";
	  $br2="display: none;";
	  $br3="display: none;";
	  $br4="display: none;";
	  $count=0;
	  $cn="display: none;";
  }
  if($b1c+$b2c+$b3c+$b4c==4)
  {
	  $count=4;
  }
  else if($b1c+$b2c+$b3c+$b4c==3)
  {
	  $count=3;
  }
  if($b1c+$b2c+$b3c+$b4c==2)
  {
	  $count=2;
  }
  if($b1c+$b2c+$b3c+$b4c==1)
  {
	  $count=1;
  }
}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart-Bin | SDMIT</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
	
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />	
			   <script>
		var options;
		
		
		function getLocation(){
			navigator.geolocation.getCurrentPosition(success,failure,options);
		}
		
		function success(position){
			var latitude = position.coords.latitude;
			var long = position.coords.longitude;
			var out = "lat:" +latitude + " long:" + long;
			$('#us3').locationpicker({
                location: {
                    latitude: latitude,
                    longitude: long
                },
                radius: 300,
                inputBinding: {
                    latitudeInput: $('#us3-lat'),
                    longitudeInput: $('#us3-lon'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
		}
		
		function failure(message){
			alert("Error:", message.message);
		}
		
		function clearScreen(){
			document.getElementById('location').innerHTML = "";
			
		}
	</script>
   </head>
<body>

    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="binstatus.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul align="right" class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                       
                       
                        <li><a href="php/logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>User</div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                   <li class="selected">
                        <a href="#"><i class="fa fa-bars"></i>&nbsp;Dashboard</a>
                    </li>
                    <li>
                        <a href="user.php"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Bin-status</a>
                    </li>
                     
                    
                    <li >
                        <a href="#"><i class="fa fa-map-marker"></i>&nbsp; Area MAP<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="map2.php">SDMIT Campus </a>
                            </li>
                            <li>
                                <a href="#">Area-2</a>
                            </li>
                            <li>
                                <a href="#">Area-3</a>
                            </li>
                            <li>
                                <a href="#">Area-4</a>
                            </li>
						</ul>
                        <!-- second-level-items -->
                    </li>
					<li >
						<a href="complaint.php"><i class="fa fa-user"></i>&nbsp;Request Bin </a>
					</li> 
					
					<li class="selected">
						<a href="request.php" ><i class="fa fa-user"></i>&nbsp; Complaints</a>
					</li> 
						
						
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
		
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

           
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Complaint Form</h1>
                </div>
				
                <!--End Page Header -->
            

			<div class="col-lg-6" >
				<div class="row">
					<form method="post" action="req.php">

						<fieldset>
						
							<div class="form-group">
								<label class="col-lg-12 control-label" for="uname"><span float:left;">Name:</span>
									<input type="text" placeholder="Your Name" id="uname" class="form-control" name="uname">
								</label>
							</div>
					
							<div class="form-group">
								<label class="col-lg-12 control-label" for="uemail">	<br/>Email:
									<input type="text" placeholder="Your Email" id="uemail" class="form-control" name="uemail">
								</label>
							</div>

							<div class="form-group">
								<label class="col-lg-12 control-label" for="phnno">	<br/>Phone Number:
									<input type="text" placeholder="Phone Number" id="phnno" class="form-control" name="phnno">
								</label>
							</div>
			
							<div class="form-group">
								<label class="col-lg-12 control-label" for="city">	<br/>City:
									<input type="text" placeholder="City" id="city" class="form-control" name="city">
								</label>
							</div>
			
							<div class="form-group">
								<label class="col-lg-12 control-label" for="zcd">	<br/>Zip Code:
									<input type="text" placeholder="Zip Code" id="zcd" class="form-control" name="zcd">
								</label>
							</div>
	
							<div class="form-group">
								<label class="col-lg-12 control-label" for="text">	<br/>Text Request:
								<textarea rows="4" cols="59" id="text" class="form-control" name="text"></textarea><br/>
								
								</label>
							</div>
							
							<div align="center">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
        </div>
        <!-- end page-wrapper -->
	</div>
  
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
	
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
	<script src="assets/scripts/map1.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
	<script src="assets/scripts/jquery-1.11.1.min.js"></script>
	<script src="assets/scripts/jquery.mobile-1.4.5.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO6tCXZWxO5FfEsVHSODhzykmpWb1julk"></script>
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="assets/scripts/locationpicker.jquery.min.js"></script>
</body>

</html>
