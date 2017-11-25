
<?php

require_once './config.php';


  
$name = trim( $_POST["uname"]);
$email = trim( $_POST["uemail"]);
$num = trim( $_POST["phnno"]);
$city = trim( $_POST["city"]);
$zip = trim( $_POST["zcd"]);
$text = trim( $_POST["text"]);


try {
$sql = "INSERT INTO `req` (`name`, `email`, `num` ,`city` ,`zip` ,`text`) VALUES " . " (:name, :email, :num, :city, :zip, :text)";

      
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":name", $name);
      $stmt->bindValue(":email", $email);
	  $stmt->bindValue(":num", $num);
	  $stmt->bindValue(":city", $city);
      $stmt->bindValue(":zip", $zip);
	  $stmt->bindValue(":text", $text);
	  
      $stmt->execute();
      $result = $stmt->rowCount();
}
catch (Exception $ex) {
    echo $ex->getMessage();
  }
?>


<?php
include './header.php';
?>
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <h1>Your complaint has been recorded, please wait untill our officers verification.</h1>
			<form method="post" action="user.php">
				<button type="submit" class="btn btn-primary">Home</button>
			</form>
	</div>
  </div>
</div>

<?php
include './footer.php';
?>