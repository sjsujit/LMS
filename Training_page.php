<?php
session_start(); 
?>
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
		<meta charset="UTF-8">
		<title>Training Page</title>
		<link rel="stylesheet" href="Training_page.css">
</head>
<body>

	<header>
	<img src="header." class="header">
	</header>
<h1><center>Learning Management System</center></h1>
<nav>
	<ul>
		<a href="#"><li>Home</li></a>
		<a href="#"><li>Training</li></a>
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
  <td><button id="myBtn" onclick = "model_MVC('1')">Start</button> </td>


</tr>
<?php } ?>

</center>
</table>


<!--<table>
  <center>
  <tr>
    <th>Training name</th>
    <th>Start date</th> 
    <th>End date</th>
	<th>Assign by</th>
    <th>Status</th> 
    <th>Action</th>
  </tr>
  <tr>
    <td>Conflict Resolution</td>
	<td></td>
    <td></td>
	<td></td>
    <td></td>
	<td><button id="myBtn" onclick = "model_MVC('1')">start</button>-->

<script>
// Get the modal
function model_MVC(param){

document.getElementById("hidVal").value = param;
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 

  modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

}
</script>
<div id="myModal" class="modal">

  Modal content
  <div class="modal-content">
    <span class="close">&times;</span>
   <p> <h4>Instruction's for the training</h4></p>
<p align="left">
1. Once you click on the "Click here to start the Training" button,it will take you to Pre-assessment window.<br>

2. Pre-assessment consist of two questions to test you knowledge prioir to the training. Answers to all the questions are mandatory. After you answer, click on Next. It will take you to the Login page of BrickStreet.<br>

3.Login to the BrickStreet website with the USerame and Password and it will route you to the video.<br>

4. Complete the Video and close the window, that will take you to the Post-Assessment window.<br>

5.Post-Assessment has two questions and answer to all the questions are mandatory. This is required to test your knowlegde after the training.<br>

6. Click on Finish Button to record your training.<br>  
</p>
<form onsubmit="page()">
  <input type = "text" id = "hidVal" name = "hidVal" value = "" >
<input type="submit" value="Click to start the training"  />
<script>
  function page(){
  var pageID1 = document.getElementById('hidVal').value;
  window.location.href = "../project/post_assessment.php?pageID="+pageID1;
  }
  </script>
</form>
    </p>
  </div>

</div>
<!--
</td>
    
  </tr>
  <tr>
    <td>Customer Violence in Retail</td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
	<td><button id="myBtn" onclick = "model_MVC('2')">start</button></td>
    
  </tr>
  <tr>
    <td>Discrimination in the Workplace</td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
	<td><button id="myBtn" onclick = "model_MVC('3')">start</button></td>
    
  </tr>
  <tr>
    <td>Drug-Free Workplace</td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
	<td><button id="myBtn" onclick = "model_MVC('4')">start</button></td>
	
  </tr>
  <tr>
    <td>Sexual Harassment and Discrimination</td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
	<td><button id="myBtn" onclick = "model_MVC('5')">start</button></td>
    
  </tr>
  <tr>
    <td>Violence in the Workplace</td>
    <td></td>
    <td></td>
	<td></td>
    <td></td>
	<td><button id="myBtn" onclick = "model_MVC('6')">start</button></td>
    
  </tr>
  </center>
</table>-->
</article>

<footer>
  <img src="footer.jpeg" class="footer">
</footer>
</body>
</html>	