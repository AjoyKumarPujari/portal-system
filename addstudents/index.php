<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>student entry</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.datepicker.custom.min.js" type="text/javascript"></script>
<style>
label{
	color:#F00;
}
</style>
<?php /*?><script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.validate.js" type="text/javascript"></script>
<script>

	$(document).ready(function()
	{
		  $("#form1").validate({
					rules: {
						
						phno:{
							digits:true,
							maxlength:10,
							minlength:10
						},
						
						mail: {
							email:true
						}
							
						
						
					},
					messages: {
						
						phno:{
							digits: "Enter Numbers Only",
							maxlength:"Enter 10 Digits",
							minlength:"Enter 10 Digits"
						},
						mail: {
							email: "enter valid email"
						}
			
						
					}
		  });
		  
  });
  
</script>
<?php */?>

</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><a href="../adminhome.php">AAU COMMUNITY</a></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
     <img src="../PICS/users.png" class="w3-circle w3-center w3-margin-right" style="width:80px">
    </div><br>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="../adminhome.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw"></i>   Home</a>
    <a href="../adddept/viewdept.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-building fa-fw"></i>   Departments</a>
    <a href="../addteachers/viewteacher.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>   Teachers</a>
    <a href="viewstudent.php" class="w3-bar-item w3-button w3-padding  w3-light-gray"><i class="fa fa-users fa-fw"></i>   Students</a>
    <a href="../addnews/viewnews.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>   News</a>
    <a href="../logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-close fa-fw"></i>  Logout</a>
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container w3-border-bottom" style="padding-top:22px; padding-bottom:22px">
    <h5><b><i class="fa fa-dashboard"></i> Admin Panel</b>/Students</h5>
    <p> <a class="w3-btn w3-right  w3-indigo w3-hover-light-gray fa fa-eye w3-round" href="viewstudent.php"> View Students </a></p>
  </header>
  
  <div class="w3-card-4 w3-white w3-round w3-border w3-border-black " style="width:75%; margin:50px auto;">
    	<div class="w3-container w3-white w3-border-bottom w3-border-black w3-center w3-round">
        	<h5>ADD NEW STUDENTS</h5>
        </div>
        
        <div class="w3-container w3-padding-12 w3-round">
         <form name="form1" id="form1" class="w3-container w3-center" enctype="multipart/form-data" method="post" action="addstudents.php">
         
          <input class="w3-input w3-border-botttom w3-border-blackr " type="text"  placeholder="Enter name" name="name" required><br>

          <input class="w3-input w3-border-botttom w3-border-black" type="text"  placeholder="Enter Roll Number" name="rollno" required> 
          
            <select name="dept" required class="w3-input w3-border-botttom w3-border-black w3-margin-top w3-margin-bottom" id="select" >
            <option>Select Department</option>
            <?php
				include "connect.php";
				$sql="Select * from dept";
				$result=mysql_query($sql,$link);
				while($row=mysql_fetch_array($result))
				{
					echo '<option>'.$row["name"].'</option>';	
				}
			?>
          </select>
         

          <input class="w3-input w3-border-botttom w3-border-black" type="text"  placeholder="Enter Semester" name="sem" required><br>

          <input class="w3-input w3-border-botttom w3-border-black" type="text"  placeholder="Enter Address" name="address" required><br>
       
          <input class="w3-input w3-border-botttom w3-border-black" type="text"  placeholder="Enter Phone Number" name="phno" required><br>
       
          <input class="w3-input w3-border-botttom w3-border-black " type="email"  placeholder="Enter email" name="mail" required><br>
         
          <input class="w3-input w3-border-botttom w3-border-black" type="password"  placeholder="Enter Password" name="password" required><br>
          
          <input type="text" id="Datepicker1" name="dob" class="w3-input w3-border-botttom w3-border-black" placeholder="Choose Date of Birth"><br>
          
          <input class="w3-input w3-border-botttom w3-border-black" type="text"  placeholder="Enter School name" name="school" required><br>
           
          <input class="w3-input w3-border-botttom w3-border-black" type="text"  placeholder="Enter College name" name="college" required><br>
           
          <input name="file1"  type="file" required class="w3-input w3-border" id="file1" ><br>
          
          <input class="w3-btn  w3-indigo w3-round " type="submit" name="submit" value="Submit">
          
         
        </form><br>
        
      </div>
    </div>
    </div>
        
        
   


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
$(function() {
	$( "#Datepicker1" ).datepicker({
		changeMonth:true,
		changeYear:true
	}); 
});
</script>
<?php
	if(isset($_GET["ok"]))
		{
			echo '<script>alert("Record Submitted");</script>';
		}
 ?>

</body>
</html>
