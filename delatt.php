 <?php
			include "connect1.php";
			$id=$_GET["id"];
			$sql="delete  from attendence where id='$id'";
			$result=mysql_query($sql,$link);
			if($result)
		{
			header("location:viewattendence.php");	
		}
		else
		{
			echo mysqli_error($link);
		}
  ?>