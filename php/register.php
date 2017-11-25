<?php  //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
$temp=0;

//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `user` WHERE name='$username' and pass='$password'";
$query2 = "SELECT * FROM `user` WHERE name='$username' and pass='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($result=mysqli_query($connection,$query))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    $stat=$row[5];
	
    }
  // Free result set
  mysqli_free_result($result1);
}

if($username=='admin'&&$password=="sdmit123"){
	$temp=1;
}

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1 && $stat=="approved"){
$_SESSION['username'] = $username;
}
else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
if($temp==1){
	$_SESSION['admin'] = $username;
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
header('Location: ../user.php');
 
}
else if (isset($_SESSION['admin'])){
$username = $_SESSION['admin'];
header('Location: ../binstatus.php');
 
 $temp=0;
}
else{
	
	echo '<script type="text/javascript">alert("Wrong User Name or Password "); </script>';
}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBin | SDMIT</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="../assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="../php/register.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<center>Not yet Signed up? Sign up <a href="registration.php">Here.</a></center>
     <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>