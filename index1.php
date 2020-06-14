<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Personalization</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
		<p>Hey <strong><?php echo $_SESSION['username']; ?></strong></p>
		<br><p>Select your day to day role</p>
		<br>
		<h4>
		<input type="radio" name="Education" id="rd1">
		<label for="rd1">Education</label><br>
		<input type="radio" name="Interview" id="rd2">
		<label for="rd2">Interview Scheduling</label><br>
		<input type="radio" name="Account Management" id="rd3">
		<label for="rd3">Account Managment</label><br>
		<input type="radio" name="Consultant" id="rd4">
		<label for="rd4">Consultant<br>
		<input type="radio" name="LeaderEnterpreneur" id="rd5">
		<label for="rd5">Leader and Entreprenuer</label><br>
		<input type="radio" name="SalesMarketing" id="rd6">
		<label for="rd6">Sales and Marketing</label><br>
		<input type="radio" name="Others" id="rd7">
		<label for="rd7">Others</label><br>
		</h4>
	
		<br><br>
		<a href="index2.php" style="color:blue;">Finish</a><br>
    	
    <?php endif ?>
</div>
		
</body>
</html>