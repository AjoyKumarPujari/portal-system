<?php
	session_start();
	include 'connect.php';
	$pid=$_POST["pid"];
	$comment=$_POST["comment"];
	$date=date("Y-m-d");
	$postby=$_SESSION["uname"];
	$photo="NA";
	
	$sql="insert into comment values(null,'$pid','$date','$postby','$comment','$photo')";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		$rec=mysqli_query($link,"Select comment from posts where id='$pid'");
		$rw=mysqli_fetch_array($rec);
		$n=$rw[0];
		$n++;
		mysqli_query($link,"update posts set comment='$n' where id='$pid'");
		header("location:walls.php");
	}
	else
	{
		echo mysqli_error($link);	
	}
?>