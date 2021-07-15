<?php
	session_start();
	include 'connect.php';
	if(isset($_POST["submit"]))
	{
		$topic=$_POST["topic"];
		$date=date("Y-m-d");
		$postby=$_SESSION["uname"];
		$photo="";
		
		if(empty($_FILES["file1"]["name"]))
		{
			$photo="NP";	
		}
		else
		{
			$target_dir = "Post/";
			$file = $target_dir . basename($_FILES["file1"]["name"]);
			
			$fileData = pathinfo(basename($_FILES["file1"]["name"]));
			
					
			$fileName = uniqid() . '.' . $fileData['extension'];
			$target_path = "Post/" . $fileName;
				
			while(file_exists($target_path))
			{
				$fileName = uniqid() . '.' . $fileData['extension'];
				$target_path = "Post/" . $fileName;
			}
			move_uploaded_file($_FILES["file1"]["tmp_name"], $target_path);
			
			$photo="Post/" . $fileName;
		}
		echo $photo;
		
		$sql="insert into posts values(null,'$date','$postby','Professor','$topic','$photo','0')";
		$result=mysqli_query($link,$sql);
		if($result)
		{
			header("location:wall.php");	
		}
		else
		{
			echo mysqli_error($link);
		}
		
	}
?>