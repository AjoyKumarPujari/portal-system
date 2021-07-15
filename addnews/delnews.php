 <?php
			include "connect.php";
			$id=$_GET["id"];
			$sql="delete  from news where id='$id'";
			$result=mysql_query($sql,$link);
			if($result)
		{
			header("location:viewnews.php");	
		}
		else
		{
			echo mysqli_error($link);
		}
  ?>