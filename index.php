<?php 
  session_start(); 

  if (!isset($_SESSION['fname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['fname']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Regal Palace</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php include('header.html') ?>
<div class='container'>
<div class="header">
	<h2>Welcome to Regal Palace</h2>
</div>
<div class="content">
  	
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

    <?php  if (isset($_SESSION['fname'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['fname']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
</div>		
</body>
</html>