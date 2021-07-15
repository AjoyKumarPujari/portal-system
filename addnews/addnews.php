<?php
	
	include 'connect.php';
	if(isset($_POST["submit"]))
		{
			$headline=$_POST["headline"];	
			$news=$_POST["news"];
			$date=date("Y-m-d");;
			$str= "insert into news values	( null,'$headline','$news','$date')";
			$result=mysql_query($str,$link);
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