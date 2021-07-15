<?php
	include 'connect.php';
	if(isset($_POST["submit"]))
		{
			$name=$_POST["name"];
			$dept=$_POST["dept"];
			$sub=$_POST["sub"];
			$add=$_POST["address"];
			$phno=$_POST["phno"];
			$mail=$_POST["mail"];
			$password=$_POST["password"];	
			$target_dir = "photos/";
			$file = $target_dir . basename($_FILES["file1"]["name"]);
			$fileData = pathinfo(basename($_FILES["file1"]["name"]));
					
			$fileName = uniqid() . '.' . $fileData['extension'];
			{
			$target_path = "photos/" . $fileName;
			
			while(file_exists($target_path))
			{
				$fileName = uniqid() . '.' . $fileData['extension'];
				$target_path = "photos/" . $fileName;
			}
			
			move_uploaded_file($_FILES["file1"]["tmp_name"], $target_path);
			$photo = "photos/".$fileName;
				
			$str= "insert into professor values( null,'$name','$dept','$sub','$add','$phno','$mail','$password','$photo')";
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
		}
?>				