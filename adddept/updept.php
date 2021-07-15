<?php
if(isset($_POST['submit']))
{
 	include "connect.php";
	        $id=$_POST["id"];
	        $name=$_POST["name"];
			$sem=$_POST["sem"];
		   $sql="update dept set name='$name',sem='$sem' where id='$id'";
		   echo $sql;

			$result=mysql_query($sql,$link);
			if($result)
			{
				header("location: viewdept.php?ok=1");
				
			}
			else
			{
				echo mysql_error();
			}
	    }
		
?>				
		