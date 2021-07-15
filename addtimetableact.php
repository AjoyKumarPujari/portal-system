<?php
	include"connect1.php";
	if(isset($_POST["submit"]))
	{
        $detail=$_POST["detail"]; 
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
	    $str="insert into timetable values (null,'$photo','$detail')";
	    $result=mysql_query($str,$link);
		if($result)
		{
			header("location:addtimetable.php?ok=1");
		}
		else
		{
			echo mysql_error();
		}
       
 }
?>

			