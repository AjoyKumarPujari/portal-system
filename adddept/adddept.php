<?php
	
	include 'connect.php';
	if(isset($_POST["submit"]))
		{
			
			$name=$_POST["name"];
			$sem=$_POST["sem"];
			
			$str= "insert into dept values( null,'$name','$sem')";
			$result=mysql_query($str, $link);
			if($result)
			{
				header("location: index.php?ok=1");
				
			}
			else
			{
				echo mysql_error();
			}
	    }
?>				