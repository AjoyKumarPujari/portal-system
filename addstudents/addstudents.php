<?php
	
	include 'connect.php';
	if(isset($_POST["submit"]))
		{
			
			$name=$_POST["name"];
			$rollno=$_POST["rollno"];
			$dept=$_POST["dept"];
			$sem=$_POST["sem"];
			$add=$_POST["address"];
			$phno=$_POST["phno"];
			$mail=$_POST["mail"];
			
			$password=$_POST["password"];
			$bdate=mysql_real_escape_string($_POST["dob"]);
			$dob=date("Y-m-d",strtotime($bdate));
			$school=$_POST["school"];	
			$college=$_POST["college"];
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
				
			$str= "insert into student values
			( null,'$name','$rollno','$dept','$sem','$add','$phno','$mail','$password','$dob','$school','$college','$photo')";
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