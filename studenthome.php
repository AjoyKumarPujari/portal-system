<?php
 session_start();
 include 'connect.php';
 $email=$_SESSION["uname"];
 $sql="Select * from student where mail='$email'";
 $result=mysqli_query($link,$sql);
 $row=mysqli_fetch_array($result);
 $name=$row[1];
 ?>
<!doctype html>
<html> 
<head>
<meta charset="utf-8">
<title>Student Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-teal w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">AAU COMMUNITY</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4"> <a href="studentprofile.php"><img src="PICS/users.png" class="w3-circle w3-margin-right" style="width:60px"></a>
    </div>
    <div class="w3-col s8 w3-bar"><br>
    
      <span> <strong><?php echo $name; ?></strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="studenthome.php" class="w3-bar-item w3-button w3-padding w3-light-gray"><i class="fa fa-home fa-fw"></i>  Student Home</a>
    <a href="#" class="w3-bar-item w3-button w3-padding "><i class="fa fa-pencil fa-fw"></i>  Add New Post</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  View/Edit Post</a>
    <a href="viewdepts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-building-o fa-fw"></i>  view Department</a>
    <a href="viewteacher.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  View Teachers</a>
    <a href="viewstudent.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  View Students</a>    
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  View attendance</a>
    <a href="newses.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw"></i>  View News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="material-icons w3-large">question_answer</i></i>  Massage</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-close fa-fw"></i>  Logout</a>
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <div class="w3-container w3-border-bottom" style="padding-top:22px; padding-bottom:22px">
    <h5><b><i class="fa fa-dashboard"></i> Student Panel</b></h5>
    <div align="right">
    <div class="w3-container " style="width:60%" >
    
   


     
    
    </div>
    </div>
    
  </div>

  <div class="w3-row-padding w3-margin-bottom">
   <div class="w3-quarter w3-animate-zoom">
      <div class="w3-container w3-purple w3-padding-16  w3-margin-top w3-hover-pale-red">
        <div class="w3-left"><i class="fa fa-file w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="#">wall</a></h4>
      </div>
    </div>
    
     <div class="w3-quarter  w3-animate-zoom">
      <div class="w3-container w3-orange w3-text-white w3-padding-16  w3-margin-top w3-hover-pale-red ">
        <div class="w3-left"><i class="fa fa-newspaper-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="viewnews.php">News</a></h4>
      </div>
    </div>
    
     <div class="w3-quarter w3-animate-zoom">
      <div class="w3-container w3-red w3-padding-16  w3-margin-top w3-hover-pale-red">
        <div class="w3-left"><i class="fa fa-building-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="viewdepts.php">Department</a></h4>
      </div>
    </div>
    
    <div class="w3-quarter w3-animate-zoom">
      <div class="w3-container w3-blue w3-padding-16  w3-margin-top w3-hover-pale-red">
        <div class="w3-left"><i class="fa fa-male w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="viewteacher.php">Teachers</a></h4>
      </div>
    </div>
   
    <div class="w3-quarter w3-animate-zoom">
      <div class="w3-container w3-teal w3-padding-16 w3-margin-top w3-hover-pale-red">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="viewstudent.php">Students</a></h4>
      </div>
    </div>
    
    <div class="w3-quarter  w3-animate-zoom">
      <div class="w3-container w3-pink w3-padding-16 w3-margin-top w3-hover-pale-red">
        <div class="w3-left"><i class="fa fa-calendar w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4><a href="#">TimeTables</a></h4>
      </div>
    </div>
    
    <div class="w3-quarter  w3-animate-zoom">
      <div class="w3-container w3-brown w3-padding-16 w3-margin-top w3-hover-pale-red">
        <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Attendance</h4>
      </div>
    </div>
  
    <div class="w3-quarter  w3-animate-zoom">
      <div class="w3-container w3-blue-gray w3-text-white w3-padding-16 w3-margin-top w3-hover-pale-red ">
        <div class="w3-left "><i class="material-icons">question_answer</i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Massage</h4>
      </div>
    </div>
</div>
  </div>
  <hr>
  <hr>
  <hr>
  <hr>
  <br>

  <!-- End page content -->
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
