
<?php
$con=mysqli_connect("localhost","root","","goodwill");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<!doctype html>
<html>
    <head>
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<title>Training Page</title>
    		<link rel="stylesheet" href="style.css">
    </head>
<body>
	<header>
	<img src="header.jpeg" class="header">
	</header>
<h1><center>Learning Management System</center></h1>
<nav>
	<ul>
		<a href="#"><li>Home</li></a>
		<a href="http://localhost/ProjectWork/Training_page.php?#"><li>Training</li></a>
		<a href="#"><li>Contact Us</li></a>
		<a href="#"><li>View profile</li></a>
		<a href="#"><li>Logout</li></a>
	</ul>
</nav>
<article>
  <table>
    <center>
    <tr>
      <th>Training name</th>
    <th>Start date</th> 
    <th>End date</th>
   <th>Assign by</th>
    <th>Action</th>
  </tr>   
<?php
$sql="SELECT TrainingName,StartDate,EndDate FROM traininglist";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
?>
    <tr>
      <td><?php echo $row['TrainingName'];?></td>
      <td><?php echo $row['StartDate'];?></td>
      <td><?php echo $row['EndDate'];?></td>
      <td></td>
      <td><button id="myBtn">Start</button></td>
    </tr>
<?php } ?>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><h4>Instructions for the Training</h4></p>
    <p>1. Once you click on the "Click here to start the Training" button,it will take you to Pre-assessment window.<br>

      2. Pre-assessment consist of two questions to test you knowledge prioir to the training. Answers to all the questions are mandatory. After you answer, click on Next. It will take you to the Login page of BrickStreet.<br>

      3.Login to the BrickStreet website with the USerame and Password and it will route you to the video.<br>

      4. Complete the Video and close the window, that will take you to the Post-Assessment window.<br>

      5.Post-Assessment has two questions and answer to all the questions are mandatory. This is required to test your knowlegde after the training.<br>

      6. Click on Finish Button to record your training.<br>  
      </p>
      <form action="https://www.trainingnetworknow.com/Topics/OSHA-Compliance/Slips,-Trips,-Falls/Slips,-Trips,-And-Falls" method="get" target="_blank">
  <input type="submit" value="Click here to start the Training">
  
</form>

  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  function myFunction() {
  window.open("../ProjectWork/post_assessment.php");
}
}
</script>
</center>
</table>
</article>
<footer>
  <img src="footer.jpeg" class="footer">
</footer>
</body>
</html>	