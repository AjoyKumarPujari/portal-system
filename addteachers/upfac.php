<?php
if(isset($_POST['submit']))

{
 	include "connect.php";
	        $id=$_POST["id"];
	        $name=$_POST["name"];
			$dept=$_POST["dept"];
			$sub=$_POST["sub"];
			$add=$_POST["add"];
			$phno=$_POST["phno"];
			$mail=$_POST["mail"];
			$password=$_POST["password"];
			
		   $sql="update professor set name='$name',dept='$dept', sub='$sub', address='$add', phno='$phno',mail='$mail',password='$password' where id='$id'";
		   echo $sql;

			$result=mysql_query($sql,$link);
			if($result)
			{
				header("location: viewteacher.php?ok=1");
				
			}
			else
			{
				echo mysql_error();
			}
	    }
		if(isset($_POST['submit1']))
		{
			include "connect.php";
	        $id=$_POST["id"];
			$target_dir = "photos/";
			$file = $target_dir . basename($_FILES["file1"]["name"]);
			$fileData = pathinfo(basename($_FILES["file1"]["name"]));
					
			$fileName = uniqid() . '.' . $fileData['extension'];
			
			$target_path = "photos/" . $fileName;
			
			while(file_exists($target_path))
			{
				$fileName = uniqid() . '.' . $fileData['extension'];
				$target_path = "photos/" . $fileName;
			}
			
			move_uploaded_file($_FILES["file1"]["tmp_name"], $target_path);
			$photo = "photos/".$fileName;
			 $sql="update professor set photo='$photo' where id='$id'";
			 echo $sql;
			$result=mysql_query($sql,$link);
			if($result)
			{
				header("location: viewteacher.php?ok=1");
				
			}
			else
			{
				echo mysql_error();
			}
	    }

			
		
?>				
		