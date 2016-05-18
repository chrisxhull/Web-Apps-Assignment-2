<?php include('header.php');?>

<?php 

	session_start();
	
	if(isset($_SESSION['Username'])){
		
		session_destroy();
		
		header('Location: index.php');
		
	}
	
	?>
	
<?php include('footer.php');?>