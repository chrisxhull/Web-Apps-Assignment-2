<!DOCTYPE html>

<html>

<head>

<title>Gig Website</title>

<link href="Gigwebsite.css" type="text/css" rel="stylesheet">

<!-- Load up jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- Load up bxSlider from our directory -->
		<script src="jquery.bxslider.min.js"></script>
		<!-- Load up the bxSlider css -->
		<link href="jquery.bxslider.css">
		<!-- tell bxSlider to apply itself to the .slider class and make anything inside there "slide" -->
		<script>
			$(document).ready(function(){
				$('.slider').bxSlider({
				mode: 'vertical',
			    slideMardin: 5,
				auto: true,
				controls: false,
				pager: false});
				});
		</script>

</head>

<body>

<header class="header" id="FixedDiv">

<div id="FixedDiv3">

<a href="index.php" title="Home Page">Home</a>
<a href="Add.php" title="List of Venues">Add Account</a>
<a href="Events.php" title="List of different events">Events</a>

<a href="login.php">login</a>
<a href="logout.php">logout</a>
</div>
</header>