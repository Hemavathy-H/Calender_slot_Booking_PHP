<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
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
	<h2>Home Page </h2>
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
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<br>
		<p>Define your Available slots using our Calender Slot Booking service..</p>
		<br>
		<h5>Available slots</h5>
		<h4><select name="dropdown">
			<option value="1">09.00 am</option>
			<option value="2">10.00 am</option>
			<option value="2">11.00 am</option>
			<option value="2">12.00 am</option>
		</select>
		<select name="dropdown">
			<option value="1">02.00 pm</option>
			<option value="2">03.00 pm</option>
			<option value="2">04.00 pm</option>
			<option value="2">05.00 pm</option>
		</select></h4><br>
		<h5>Available days</h5>
		<label class="checkbox-inline">
      <input type="checkbox" value="">Sunday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Monday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Tuesday
	</label>
	<label class="checkbox-inline">
      <input type="checkbox" value="">Wednesday
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Thursday
    </label><br>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Friday
	</label>
	<label class="checkbox-inline">
      <input type="checkbox" value="">Saturday
    </label>
		<br><br>
		
		<a href="index1.php" style="color:blue;">Next</a><br>
    	
    <?php endif ?>
</div>
		
</body>
</html>