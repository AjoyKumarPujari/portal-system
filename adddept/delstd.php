 <?php
			include "connect.php";
			$id=$_GET["id"];
			$sql="delete  from dept where id='$id'";
			$result=mysql_query($sql,$link);
			if($result)
		{
			header("location:viewdept.php");	
		}
		else
		{
			echo mysqli_error($link);
		}
  ?>