<!DOCTYPE html>
<html>
<?php
include './header.php';
?>
<?php  //Start the Session
session_start();
if(!$_SESSION['admin'])  
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
	 $br1="";
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
	 $br2="";
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
	 $br3="";
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
	<title>Google Maps Latitude and Longitude Picker jQuery plugin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/demo.css"/>

	<!-- Dependencies: JQuery and GMaps API should be loaded first -->
	<script src="js/jquery-2.1.1.min.js"></script>


	<!-- CSS and JS for our code -->
	<link rel="stylesheet" type="text/css" href="css/jquery-gmaps-latlon-picker.css"/>
	<script src="js/jquery-gmaps-latlon-picker.js"></script>
 
    <!-- Core CSS - Include with every page -->
   
     
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAi7QuhWz20gbg5QJfHbs30hExbyXvbVfU&callback=myMap"></script>
	  
	  
</head>
<body>


<form>

	
	 <fieldset class="gllpLatlonPicker">
		
		<br/><br/>
		<div class="gllpMap" style="height: 500px; width: 1000px; position: absolute; top: 90px; left: 190px; background-color: rgb(229, 227, 223);">Google Maps</div>
		<br/>
		<div style="display: none;">
		lat/lon:
			<input type="text" class="gllpLatitude" value="<?php echo htmlspecialchars($lt3);?>"/>
		
			<input type="text" class="gllpLongitude" value="<?php echo htmlspecialchars($ln3);?>"/>
		zoom: <input type="text" class="gllpZoom" value="16"/>
		<input type="button" class="gllpUpdateButton" value="update map"></div>
		
		<br/>
		
	</fieldset>

</form>
<form method="post" action="bin3.php">
				<button type="submit" class="btn btn-primary">Return</button>
			</form>
<!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>