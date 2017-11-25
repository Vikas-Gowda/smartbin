  
<!DOCTYPE html>
<html>
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
    <meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart-Bin | SDMIT</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
	 <link href="assets/css/meter.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.material.mobile.min.css" />

   <script src="https://kendo.cdn.telerik.com/2017.1.223/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAi7QuhWz20gbg5QJfHbs30hExbyXvbVfU&callback=myMap"></script>
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
                    <img src="assets/img/logo.png"/>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul align="left" class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
				
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger" style="<?php echo htmlspecialchars($cn);?>"><?php echo htmlspecialchars($count);?></span>
						<i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                       
				
						<div id="dom-target1" style="display: none;">
							<?php 
								echo htmlspecialchars($m1);
							?>
						</div>
		
						<div id="dom-target2" style="display: none;">
							<?php 
								echo htmlspecialchars($m2);
							?>
						</div>
	
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($m3);
							?>
						</div>
						
						<div id="dom-target4" style="display: none;">
							<?php 
								echo htmlspecialchars($m4);
							?>
						</div>
                        <div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($bin1);
							?>
						</div>
						
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($b1msg);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($bin2);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($b2msg);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($bin3);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($b3msg);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($bin4);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								echo htmlspecialchars($b4msg);
							?>
						</div>
                         <div id="dom-target3" style="display: none;">
							<?php 
								
								echo htmlspecialchars($br1);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								
								echo htmlspecialchars($br2);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								
								echo htmlspecialchars($br3);
							?>
						</div>
						<div id="dom-target3" style="display: none;">
							<?php 
								
								echo htmlspecialchars($br4);
							?>
						</div>
						
                        <li   >
                            <a href="#">
                                
                                <div><?php echo htmlspecialchars($msg);?></div>
                            </a>
                        </li>
						  
						 
						 <li style="<?php echo htmlspecialchars($br1);?>">
                            <a href="bin1.php">
                                <div>
                                    <strong><span class=" label label-danger"><?php echo htmlspecialchars($bin1);?></span></strong>
                                    <span class="pull-right text-muted">
                                        <em></em>
                                    </span>
                                </div>
                                <div><?php echo htmlspecialchars($b1msg);?></div>
                            </a>
                        </li>
						
                        <li style="<?php echo htmlspecialchars($br2);?>">
                            <a href="bin2.php">
                                <div>
                                    <strong><span class=" label label-danger"><?php echo htmlspecialchars($bin2);?></span></strong>
                                    <span class="pull-right text-muted">
                                        <em></em>
                                    </span>
                                </div>
                                <div><?php echo htmlspecialchars($b2msg);?></div>
                            </a>
                        </li>
                        
                        <li style="<?php echo htmlspecialchars($br3);?>">
                            <a href="bin3.php">
                                <div>
                                    <strong><span class=" label label-danger"><?php echo htmlspecialchars($bin3);?></span></strong>
                                    <span class="pull-right text-muted">
                                        <em></em>
                                    </span>
                                </div>
                                <div><?php echo htmlspecialchars($b3msg);?></div>
                            </a>
                        </li>
						
						<li style="<?php echo htmlspecialchars($br4);?>">
                            <a href="bin4.php">
                                <div>
                                    <strong><span class=" label label-danger"><?php echo htmlspecialchars($bin4);?></span></strong>
                                    <span class="pull-right text-muted">
                                        <em></em>
                                    </span>
                                </div>
                                <div><?php echo htmlspecialchars($b4msg);?></div>
                            </a>
                        </li>
                        
                       
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success"></span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Bin no-1</strong>
                                        <span class="pull-right text-muted"><?php echo htmlspecialchars($m1);?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo htmlspecialchars($m1);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo htmlspecialchars($m1);?>%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Bin no-2</strong>
                                        <span class="pull-right text-muted"><?php echo htmlspecialchars($m2);?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo htmlspecialchars($m2);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo htmlspecialchars($m2);?>%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Bin no-3</strong>
                                        <span class="pull-right text-muted"><?php echo htmlspecialchars($m3);?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo htmlspecialchars($m3);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo htmlspecialchars($m3);?>%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Bin no-4</strong>
                                        <span class="pull-right text-muted"><?php echo htmlspecialchars($m4);?>% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo htmlspecialchars($m4);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo htmlspecialchars($m4);?>%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                

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
                                <div>Admin</div>
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
                        <a href="binstatus.php" ><i class="fa fa-dashboard fa-fw"></i>&nbsp;Bin-status</a>
                    </li>
					
                     <li >
                        <a href="#"><i class="fa fa-trash-o"></i>&nbsp;Bins<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          
							<li>
                                <a href="bin1.php">Bin-1</a>
                            </li>
                            <li>
                                <a href="bin2.php">Bin-2</a>
                            </li>
                            <li>
                                <a href="bin3.php">Bin-3</a>
                            </li>
                            <li>
                                <a href="bin4.php">Bin-4</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-map-marker"></i>&nbsp;Area MAP<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                              <li >
                                <a href="map.php">SDMIT Campus </a>
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
				
					
		<li>
                        <a href="acomplaint.php" ><i class="fa fa-user"></i>&nbsp;Request Bin </a>
                </li>
                
                <li>
                        <a href="arequest.php" ><i class="fa fa-user"></i>&nbsp;Complaints</a>
                </li>
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
		
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Bin-Status</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Admin</b>
						<i class="fa  fa-pencil"></i><b> </b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
			
			
			<div class="row">
                <div class="col-lg-6">
                    <!--  Area Chart -->
					<div class="panel panel-default">
                        <div>
                            <legend><center><b>Bin-1 level</b></center></legend>
                        </div>
					
                            
							
								<div id="gauge-container1">
								<center>	<div id="gauge1"></div></center>
								
								</div>
								 	
							
					</div> 
					
                    <!-- End Area Chart -->
                </div>
               <div class="col-lg-6">
                    <!--  Area Chart -->
					<div class="panel panel-default">
                        <div>
                            <legend><center><b>Bin-2 level</b></center></legend>
                        </div>
					
                            
							
								<div id="gauge-container2">
								<center>	<div id="gauge2"></div></center>
								
								</div>
								 	
							
					</div> 
					
                    <!-- End Area Chart -->
                </div>
                <div class="col-lg-6">
                    <!--  Area Chart -->
					<div class="panel panel-default">
                        <div>
                            <legend><center><b>Bin-3 level</b></center></legend>
                        </div>
					
                            
							
								<div id="gauge-container3">
								<center>	<div id="gauge3"></div></center>
								
								</div>
								 	
							
					</div> 
					
                    <!-- End Area Chart -->
                </div>
				<div class="col-lg-6">
                    <!--  Area Chart -->
					<div class="panel panel-default">
                        <div>
                            <legend><center><b>Bin-4 level</b></center></legend>
                        </div>
					
                            
							
								<div id="gauge-container4">
								<center>	<div id="gauge4"></div></center>
								
								</div>
								 	
							
					</div> 
					
                    <!-- End Area Chart -->
                </div>
                
            </div>

			
			
		
	
        </div>
	
        <!-- end page-wrapper -->

  
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
	<script src="assets/scripts/map.js"></script>
	<script src="assets/scripts/bin1.js"></script>
	<script src="assets/scripts/bin2.js"></script>
	<script src="assets/scripts/bin3.js"></script>
	<script src="assets/scripts/bin4.js"></script>	
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>
	 

</body>

</html>
