<?php
	
	include 'connect1.php';
	if(isset($_POST["submit"]))
		{
			
			
			$dept=$_POST["dept"];
			$sem=$_POST["sem"];
			$rollno=$_POST["rollno"];
			$name=$_POST["name"];
			$sub=$_POST["sub"];
			$month=$_POST["month"];
			$tclass=$_POST["tclass"];	
			$pclass=$_POST["pclass"];
			
			$percent=($pclass/$tclass)*100;
			
				
			$str= "insert into attendence values
			( null,'$dept','$sem','$rollno','$name','$sub','$month','$tclass','$pclass','$percent')";
			$result=mysql_query($str,$link);
			if($result)
			{
				header("location: addattendence.php?ok=1");
				
			}
			else
			{
				echo mysql_error();
			}
	    }
		
?>				