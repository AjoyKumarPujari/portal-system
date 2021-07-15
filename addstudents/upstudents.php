<?php
if(isset($_POST['submit']))
{
 	include "connect.php";
	        $id=$_POST["id"];
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
			
		   $sql="update student set name='$name',rollno='$rollno',dept='$dept',sem='$sem', address='$add', phno='$phno',  mail='$mail' ,password='$password',dob='$dob',school='$school',college='$college' where id='$id'";
		   echo $sql;

			$result=mysql_query($sql,$link);
			if($result)
			{
				header("location: viewstudent.php?ok=1");
				
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
		   $sql="update student set photo='$photo' where id='$id'";
		    echo $sql;

			$result=mysql_query($sql,$link);
			if($result)
			{
				header("location: viewstudent.php?ok=1");
				
			}
			else
			{
				echo mysql_error();
			}
	    }
		   
		
		
?>				
		