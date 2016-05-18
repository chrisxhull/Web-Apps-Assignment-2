<?php include('header.php');?>

<div class="body">
<body>
<div class="thirty left">
<img src="Threedaymillionaires1.jpg" alt="Three Day Millionaires"/>
</div>

<div class="thirty left">
<?php if($_POST){
	
$mysqli = new mysqli("localhost","root","","WAL06105212");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";
	
	
}else{
	
	$query = "UPDATE Events SET Username = '{$_POST['Username']}', Review ='{$_POST['Review']}'";
	
	$results = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	
	if($results == 1)
	{echo "Review Updated!";}
else{ echo "failed";}
	
}

}
else{



$mysqli = new mysqli("localhost","root","","WAL06105212");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";
	
	
}else{
	
	$query = "SELECT * FROM Events WHERE ID ={$_GET['id']}";
	
	$results = mysqli_query($mysqli, $query);
	
	while($array = mysqli_fetch_array($results)){
		
		$id = $array['ID'];
		$title = $array['Username'];
		$contents = $array['Review'];
		
	}
	
}


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				
				<input type="text" name="Username" placeholder="Username" value="<?php echo $title;?>" required>
				<br><br>				
				<textarea rows="10" name="Review" placeholder="Review"  required> <?php echo $contents;?> </textarea>
				<br><br>
				<input type="submit" value="Post Review">
				
				</form>

</div>
<?php } ?>
<?php include('footer.php');?>