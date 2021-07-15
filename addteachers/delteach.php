<?php
			include "connect.php";
			$id=$_GET["id"];
			$sql="delete  from professor where id='$id'";
			$result=mysql_query($sql,$link);
			if($result)
		{
			header("location:viewteacher.php");	
		}
		else
		{
			echo mysqli_error($link);
		}
  ?>