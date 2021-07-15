<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>viewteacher</title>
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
    <a href="../adddept/viewdept.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-building fa-fw"></i>   Departments</a>
    <a href="viewteacher.php" class="w3-bar-item w3-button w3-padding w3-light-gray"><i class="fa fa-users fa-fw"></i>   Teachers</a>
    <a href="../addstudents/viewstudent.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>   Students</a>
    <a href="../addnews/viewnews.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="../logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-close fa-fw"></i>  Logout</a>
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <header class="w3-container w3-border-bottom" style="padding-top:22px; padding-bottom:22px">
    <h5><b><i class="fa fa-dashboard"></i> Admin Panel</b>/Teachers</h5>
     <p> <a class="w3-btn w3-right  w3-indigo w3-hover-light-gray fa fa-user-plus w3-round" href="index.php"> ADD TEACHERS </a></p>
  </header>
  
  <div class="w3-card-4 w3-white w3-round w3-border w3-border-black " style="width:95%; margin:50px auto;">
    	<div class="w3-container w3-white w3-border-bottom w3-border-black w3-center w3-round">
        	<h5 align="center">TEACHERS DETAIL </h5>
        </div>
        
        <div class="w3-container w3-padding-12 w3-round"><br>
        <table class="w3-table-all w3-small">
                	<tr>
                    	<td>Photo</td>
                    	<td> Name</td>
                        <td> Department</td>
                        <td> Subject</td>
                        <td> Address</td>
                        <td> Phone no</td>
                        <td> Email</td>
                        <td> Password</td>
                       
                        
                        <td colspan="2">&nbsp;</td>
                    </tr>
                     <?php
		include "connect.php";
		$sql="Select * from professor";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<tr>';
			echo '<td><img src="./'.$row["photo"].'" style="border-radius:50%; width:50px;"/></td>';
			echo '<td>'.$row["name"].'</td>';
			echo '<td>'.$row["dept"].'</td>';
			echo '<td>'.$row["sub"].'</td>';
			echo '<td>'.$row["address"].'</td>';
			echo '<td>'.$row["phno"].'</td>';
			echo '<td>'.$row["mail"].'</td>';
			echo '<td>'.$row["password"].'</td>';
			
			
			
		
							echo '<td><a href="editteacher.php?id='.$row[0].'" class="w3-btn w3-indigo w3-small"  title="EDIT"><i class="fa fa-pencil-square-o w3-large"></i></a></td>';	
							echo '<td><a href="delteach.php?id='.$row[0].'" class="w3-btn w3-red w3-small"  title="DELETE"><i class="fa fa-trash w3-large"></i></a></td>';
							echo '<td><a href="?id='.$row[0].'" class="w3-btn w3-indigo w3-small" title="SEND USERNAME & PASSWORD"><i class="fa fa-paper-plane w3-large"></i></a></td>';		
							echo '</tr>';
						}
					?>
                </table>
			
  </div>
  </div>
  </div>
  </body>
  </html>
  
  