<?php
    session_start();
	if(isset($_POST['logout'])){
		session_unset();
		session_destroy();
		header('location: index.php');
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <?php include "layout/header.html"?>
	
	<h3>Selamat datang <?=  $_SESSION['username'] ?></h3>
	<form action="dashboard.php" method="POST">
	    <button type="submit" name="logout">logout</button>
	</form>
	
    <?php include "layout/footer.html"?>
  </body>
</html>