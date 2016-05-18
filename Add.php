<?php include('header.php');?>
	
	<body>
	
		<div class="body">
<body>
<div class="thirty left">
<img src="cultcinemasunday.jpg" alt="cult cinema sunday"/>
</div>
		
		<main>
			<div class="body">
			
			<?php if($_POST){
			
				$mysqli = new mysqli("localhost","root","","WAL06105212");
			
						if(mysqli_connect_errno()){
							
							echo "I cannot connect";
						}else{
							
							$query = "INSERT INTO Webapps VALUES(null, '{$_POST['Firstname']}', '{$_POST['Surname']}', '{$_POST['Username']}', '{$_POST['Pword']}', '{$_POST['Venue']}', '{$_POST['Addressline1']}', '{$_POST['Addressline2']}', '{$_POST['City']}', '{$_POST['Country']}', '{$_POST['Postcode']}', '{$_POST['Email']}', '{$_POST['Phonenumber']}')";
							
							
							
							$results = mysqli_query($mysqli, $query);
							
							if($results == 1){echo "Account Created!";}
							else{echo "failed";}
						}
			}
			?>
			
				<h3>Add Account</h3>
				
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				
				<input type="text" name="Firstname" placeholder="First Name" required>
				<br>
				<input type="text" name="Surname" placeholder="Surname" required>
				<br>
				<input type="text" name="Venue" placeholder="Venue">
				<br>
				<input type="text" name="Addressline1" placeholder="Address Line 1" required>
				<br>
				<input type="text" name="Addressline2" placeholder="Address Line 2">
				<br>
				<input type="text" name="Country" placeholder="Country">
				<br>
				<input type="text" name="City" placeholder="City" required>
				<br>
				<input type="text" name="Postcode" placeholder="Postcode" required>
				<br>
				<input type="text" name="Email" placeholder="Email" required>
				<br>
				<input type="text" name="Username" placeholder="Username" required>
				<br>
				<input type="text" name="Pword" placeholder="Password" required>
				<br>
				<input type="text" name="Phonenumber" placeholder="Phone Number">
				<br><br>
				<input type="submit" value="Create Account">
				
				</form>
				
			</div>
		</main>
		
<? include('footer.php');?>