<?php
	session_start();
	include "connect.php";
	if(isset($_POST["submit"]))
	{
		$usertype=$_POST["usertype"];
		if($usertype=="Choose User Type")
		{
			header("location:index.php?usertype=null");
			return;
		}
		$username=$_POST["username"];
		$password=$_POST["password"];
		if($usertype=="Admin")
		{
			$sql="Select * from admin where username='$username'";
			$result=mysqli_query($link,$sql);
			$n=mysqli_num_rows($result);
			if($n==0)
			{
				header("location:index.php?user=null");
			}
			else
			{
				$row=mysqli_fetch_array($result);
				if($password==$row[1])
				{
					header("location:adminhome.php");
				}
				else
				{
					header("location:index.php?pass=0");	
				}
			}
		}
				
		else if($usertype=="Professor")
		{
			$sql="Select * from professor where mail='$username'";
			$result=mysqli_query($link,$sql);
			$n=mysqli_num_rows($result);
			if($n==0)
			{
				header("location:index.php?user=null");	
			}
			else
			{
				$row=mysqli_fetch_array($result);
				if($password==$row["password"])
				{
					$_SESSION["uname"]=$row["mail"];
					header("location:wall.php");
				}
				else
				{
					header("location:index.php?pass=0");	
				}
			}
		}
		else if($usertype=="Student")
		{
			$sql="Select * from student where mail='$username'";
			$result=mysqli_query($link,$sql);
			$n=mysqli_num_rows($result);
			if($n==0)
			{
				header("location:index.php?user=null");	
			}
			else
			{
				$row=mysqli_fetch_array($result);
				if($password==$row["password"])
				{
					$_SESSION["uname"]=$row["mail"];
					header("location:walls.php");
				}
				else
				{
					header("location:index.php?pass=0");	
				}
			}
		}
	}
?>