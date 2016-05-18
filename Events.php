<?php include('header.php');?>
<div class="body">
<body>
<div class="thirty left">
<img src="Threedaymillionaires1.jpg" alt="Three Day Millionaires"/>
</div>

<div class="thirty left">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. In posuere diam magna, vel sodales sapien fermentum vel. Duis enim massa, ornare vitae convallis quis, suscipit eu tellus. Suspendisse tincidunt id risus at tempor. Morbi vel nulla ut quam auctor porta. Suspendisse libero lacus, pulvinar vitae augue sed, pretium porta est. Vestibulum laoreet fermentum dolor sed scelerisque. Suspendisse ac urna tincidunt, placerat libero sed, molestie elit. Proin aliquet sollicitudin erat, a mattis est vulputate at. Suspendisse molestie nulla enim, eget fringilla nisl volutpat vel. Ut porta neque odio, ac euismod erat dapibus ut. Integer ut tortor quam. Pellentesque sed felis vitae neque faucibus iaculis. 
<br><br>
<p> Price £5</p>



<?php if($_POST){
			
				$mysqli = new mysqli("localhost","root","","WAL06105212");
			
						if(mysqli_connect_errno()){
							
							echo "I cannot connect";
						}else{
							
							$query = "INSERT INTO Events VALUES(null, '{$_POST['Username']}', '{$_POST['Review']}')";
							
							
							
							$results = mysqli_query($mysqli, $query);
							
							if($results == 1){echo "Review Posted!";}
							else{echo "failed";}
						}
			}
			?>
			
				
				
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				
				<input type="text" name="Username" placeholder="Username" required>
				<br><br>				
				<textarea rows="10" name="Review" placeholder="Review" required></textarea>
				<br><br>
				<input type="submit" value="Post Review">
				
				</form>
</div>

<div class="thirty left">

<h3>User Reviews</h3>

<?php 
			
							$mysqli = new mysqli("localhost","root","","WAL06105212");

						if(mysqli_connect_errno()){
							
							echo "I cannot connect";
						}else{
							
							$query = "SELECT * from Events ";
							
							
							$results = mysqli_query($mysqli, $query);
							session_start();

							while($array = mysqli_fetch_array($results)){
								
								echo "<p>".$array['Username']."<br>";
								
								echo "<p>".$array['Review']."<br><br>";
																if(isset($_SESSION['Username'])){

								echo "<a href='delete.php?id={$array['ID']}'>Delete</a>";
								
								echo "<a href='edit.php?id={$array['ID']}'>Edit</a>";
																}
							}
						}
			
			?>

</div

</body>
</div>
<?php include('footer.php');?>