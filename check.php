<?php$conn=mysqli_connect("localhost","root","","goodwill");
if(mysqli_connect_errno())
    {
    die("cannot connect to database".mysqli_connect_error());
    }


    if(isset($_POST['submit']))
    {
    	if(!empty($_POST['quizcheck']))
    	{
    		$count=count($_POST['quizcheck']);
    		echo "Out of 5,you have selected".$count." options";
    		$result=0;
    		$i=1;

    		$selected=$_POST['quizcheck'];
    		print_r($selected);

    		$q="select * from questions";
    		$query = mysqli_query($conn,$q);
    		while($rows=mysqli_fetch_array($query))
    		{
    			print_r($rows['ans_id']);
    			$checked = $rows['ans_id']==$selected[$i];

    			if($checked)
    			{
    				$result++;
    			}
    			$i++;
    		}

    		echo "<br> Your Total Score is". $result;
    	}
    }

mysqli_close($conn);

?>