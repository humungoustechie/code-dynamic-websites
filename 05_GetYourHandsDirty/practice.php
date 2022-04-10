<?php
	
	// Define a Constant
	define('TITLE', 'Constants & Variables');
	
	// Your Variables
	$name = 'Peter';
	$favourite_colour = 'Black';
	
	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/
	$dateTimeZone = new DateTimeZone('Europe/London');
	$todayDate = new DateTime('now', $dateTimeZone);
	$birthdate = new DateTime('1965-07-31', $dateTimeZone);
	
	$dateInternal = $birthdate->diff($todayDate);
	
	$myAge = $dateInternal->format('%y years, %m months and %d days.');
	$today = $todayDate->format('F j, Y');
	$birthDay = $birthdate->format('F j, Y');
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h3>My Name:</h3>
				<p><?php echo $name ?></p>
				
				<h3>My Favourite Colour:</h3>
				<p><?php echo $favourite_colour ?></p>

				<h3>Today's Date:</h3>
				<p><?php echo $today ?> </p>

				<h3>My Birthday:</h3>
				<p><?php echo $birthDay ?></p>

				<h3>My Age:</h3>
				<p><?php echo $myAge ?></p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<!-- THIS YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
