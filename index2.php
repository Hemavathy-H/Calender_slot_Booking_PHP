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
	<h2>Slots and Events <p> <a href="index.php?logout='1'" style="color: red;" style="text-align:right">logout</a> </p></h2>
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
		<br><p>Here are your slots and events....</p>
		<br>
        
<br><br>
		<a href="index.php" style="color:blue;">Ok</a><br>
    	
    <?php endif ?>
</div>
		
</body>
</html>