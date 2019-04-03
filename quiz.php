<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	<?php
		$conn=mysqli_connect("localhost","root","","goodwill");
		if(mysqli_connect_errno())
		    {
		    die("cannot connect to database".mysqli_connect_error());
		    }
	?>
	<h3><center>Welcome to Quiz</center></h3>

	
<form action="check.php" method="post">
		<div class="col-lg-8 m-auto">
			<div class="card">
	<?php
		for($i=1;$i<20;$i++)
		{
			$sql = "SELECT * FROM questions where qid=$i";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
				{

	?>
							
	
				<h5 class="card-header"><?php echo $row['Question']?></h5>
					

					<?php
						$sql = "SELECT * FROM answers where ans_id=$i";
						$result = mysqli_query($conn,$sql);

						while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
					?>
					
						<div class=" m-auto">
								<input type ="radio" name="quizcheck[<?php echo $row['ans_id']; ?>]" value="<?php echo $row['aid'];?>">
								<?php echo $row['Answers']; ?>
							
		
				<?php    

							}
				}

		} 
				?>
		</div>

	<input type="submit" name="submit" value="submit" class="bt btn-success m-auto d-block">
</form>

</div>
</div>

<?php
mysqli_close($conn);
?>
</div>
</body>
</html>