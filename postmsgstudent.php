<?php
	session_start();
	include "connect.php";
	$email=$_SESSION["uname"];
	$id=$_POST["id"];
	$date=date("Y-m-d");
	$msg=$_POST["msg"];
	
	$sql="insert into message values(null,'$date','$id','$email','$msg','$email','unread')";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		header("location:messages.php?fac=".$id);	
	}
	else
	{
		echo mysqli_error($link);	
	}