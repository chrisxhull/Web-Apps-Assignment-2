<?php include('header.php');?>

<?php

	if($_POST){
		
		$username = $_POST['Username'];
		$password = $_POST['Pword'];
		
		$mysqli = new mysqli("localhost", "root", "", "WAL06105212");
		
		if(mysqli_connect_errno()){
			
			echo "Error connecting to database";
			
		}
			else{
				
				$query = "SELECT * FROM Webapps WHERE Username = '{$username}'";
				
				$results = mysqli_query($mysqli, $query);
				
				$numberOfRows = mysqli_num_rows($results);
				
				if($numberOfRows == 1){
					echo 1;
					while($array = mysqli_fetch_array($results)){
						
						$dbPassword = $array['Pword'];
						
						if($dbPassword == $password){
							
							session_start();

								$_SESSION['Username'] = $username;
								
								header('Location: index.php');
								
						}
						
					}
					
				}
				
			}
			
		
	}
	?>
	<div class="body thirty left">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				
				<input type="text" name="Username" placeholder="Username" required>
				
				<input type="text" name="Pword" placeholder="Password" required>
				
				<input type="submit" value="Login">
				
				</form>
				
	</div>
				
<?php include('footer.php');?>