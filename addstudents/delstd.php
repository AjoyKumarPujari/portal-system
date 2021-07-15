 <?php
			include "connect.php";
			$id=$_GET["id"];
			$sql="delete  from student where id='$id'";
			$result=mysql_query($sql,$link);
			if($result)
		{
			header("location:viewstudent.php");	
		}
		else
		{
			echo mysqli_error($link);
		}
  ?>