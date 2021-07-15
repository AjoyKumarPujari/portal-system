<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dept entry</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">AAU COMMUNITY</span>
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
     <a href="viewdept.php" class="w3-bar-item w3-button w3-padding  w3-light-gray"><i class="fa fa-building-o fa-fw"></i>   Department</a>
    <a href="../addteachers/viewteacher.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>   Teachers</a>
    <a href="../addstudents/viewstudent.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>   Students</a>
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
    <h5><b><i class="fa fa-dashboard"></i> Admin Panel</b>/Department</h5>
     <p> <a class="w3-btn w3-right  w3-indigo w3-round w3-hover-light-gray fa fa-eye" href="viewdept.php"> VIEW DEPARTMENT </a></p>
  </header>
  <div class="w3-card-4 w3-white w3-round w3-border-black " style="width:60%; margin:50px auto;">
    	<div class="w3-container w3-center w3-border-black w3-border-bottom  w3-white w3-round">
        	<h5>ADD NEW DEPARTMENT</h5>
        </div>
        <div class="w3-container w3-border-black w3-padding-12  w3-round">
         <form name="form1" id="form1" class="w3-container " enctype="multipart/form-data" method="post" action="adddept.php"><br>
           
           <input class="w3-input  w3-border-black "  type="text"    placeholder="Enter Department name" name="name" required><br>
           
           <input class="w3-input  w3-border-black" type="text"    placeholder="Enter number of Semesters" name="sem" required><br>
          <div align="center">
           <input class="w3-button  w3-indigo w3-border w3-round "  type="submit" name="submit" value="Submit">
       </div>
         </form>
        </div>
      </div>
         
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
</script>

</body>
</html>

<?php
	if(isset($_GET["ok"]))
		{
			echo '<script>alert("record submitted");</script>';
		}
 ?>
