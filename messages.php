<?php
 session_start();
 include 'connect.php';
 $email=$_SESSION["uname"];
 $sql="Select * from student where mail='$email'";
 $result=mysqli_query($link,$sql);
 $row=mysqli_fetch_array($result);
 $name=$row[1];
 $id=$row[0];
?>
<!doctype html>
<html>
<head>
<title>AAU Portal System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="../jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
        $("#submit").click(function(e) {
            var fac=$("#fid").val();
			if(fac=="")
			{
				alert("Select a Faculty to start chatting");
				e.preventDefault();	
			}
        });
    });
</script>

<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
body, html {
    height: 100%;
    line-height: 1.5;
}
.w3-pblack
{
	background-color:#373737;
	color:#FFF;
}
a:link{
	text-decoration:none;
}
</style>
<body class="w3-theme-l5 w3-light-gray">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-indigo w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="walls.php" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>AAU COMMUNITY</a>
  <a href="newses.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-newspaper-o"></i></a>
  <a href="gallerys.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Gallery"><i class="fa fa-camera"></i></a>
  <a href="messages.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-small" title="Logout">
    <i class="fa fa-sign-out w3-xlarge"></i> 
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="newses.php" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="gallerys.php" class="w3-bar-item w3-button w3-padding-large">Gallery</a>
  <a href="viewtimetables.php" class="w3-bar-item w3-button w3-padding-large">Timetable</a>
  <a href="viewattendences.php" class="w3-bar-item w3-button w3-padding-large">Attendence</a>
   <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
</div>


<script src="../jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
        $("#submit").click(function(e) {
            var fac=$("#fid").val();
			if(fac=="")
			{
				alert("Select a Faculty to start chatting");
				e.preventDefault();	
			}
        });
    });
</script>



</head>
<div class="w3-sidebar w3-light-gray " style="width:20%; padding-top:18px;  position:fixed; top:51px;  left:10px">
  <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $name; ?></h4>
         <p class="w3-center"><img src="<?php echo 'addstudents/'.$row["photo"];?>" class="w3-circle" style="height:120px;width:120px" alt="Avatar"></p>
         <hr>
         <p align="center"><i class="fa fa-vcard-o fa-fw w3-text-theme"></i> <a href="studentprofile.php?mail=<?php echo $email;?>">My Profile</a></p>
        </div>
      </div>
</div>
<div class="w3-container" style=" width:80%; margin-left:20%; position:fixed; top:51px;  left:10px;">
  <div class="w3-row-padding w3-padding-16">
   	  <div class="w3-threequarter w3-card-2 w3-small" style="padding:16px; height:520px;">
        	<h5 align="center" class=" w3-border-bottom">Message</h5>
            <form method="post" action="postmsgstudent.php">
            
            	<p><textarea name="msg" id="msg" class="w3-input w3-border" placeholder="Type Your Message"></textarea></p>
                
                <input type="hidden" name="id" id="id" value="<?php if(isset($_GET["fac"])) { echo $_GET["fac"]; } ?>">
                
                <p align="right"><input type="submit" name="submit" id="submit" value="Post Message" class="w3-btn w3-blue"></p>
            </form>
            
            <div class="w3-container w3-white w3-border" style="Height:320px; overflow-y:scroll; padding:8px;">
            	<div class="w3-container w3-border-bottom">
                	<div class="w3-left" style="padding-bottom:8px;">
                        Selected Professor: <span class="w3-text-red"><?php if(isset($_GET["fac"])) { echo $_GET["fac"]; } else { echo 'None'; } ?></span>
                    </div>
                    <div class="w3-right" style="padding-bottom:8px;">
                        Professor: <i class="fa fa-circle w3-text-red"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You: <i class="fa fa-circle w3-text-indigo"></i>
                    </div>
                </div>
            	<?php
					if(isset($_GET["fac"]))
					{
						$fac=$_GET["fac"];
						$sql="Select * from message where professor='$fac' and student='$email' order by id desc";
						$result1=mysqli_query($link,$sql);
						while($row=mysqli_fetch_array($result1))
						{
							if($row["sender"]==$fac)
							{
								echo '<p><i class="fa fa-circle w3-text-red"></i> '.$row["msg"].' ..........<b>On</b> '.$row["date"].'</p>';
							}
							else
							{
								echo '<p><i class="fa fa-circle w3-text-indigo"></i> '.$row["msg"].' ..........<b>On</b> '.$row["date"].'</p>';
							}
						}
						$upd="Update message set status='read' where professor='$fac' and student='$email' and sender='$fac'";
						mysqli_query($link,$upd);
					}
				?>
            </div>
        </div>
        <div class="w3-quarter w3-card-2" style="padding:16px; height:520px; overflow-y:scroll;">
        	<h5 align="center" class=" w3-border-bottom">Professors</h5>
            <div class="w3-container w3-white w3-border w3-small" style="padding:8px; padding-top:0">
            	<p align="center" class="w3-text-red"><strong>Unread Messages</strong></p>
           	  <?php
					$sql="Select count(A.msg) as nom, A.professor, B.name from message as A, professor as B where A.student='$email' and A.status='unread' and A.sender=A.professor and A.professor=B.mail group by A.professor";
					$result=mysqli_query($link,$sql);
					$n=mysqli_num_rows($result);
					if($n==0)
					{
						echo '<p align="center">You have 0 unread messages</p>';	
					}
					while($row=mysqli_fetch_array($result))
					{
						echo '<p><a href="messages.php?fac='.$row["professor"].'"><i class="fa fa-circle w3-text-grey"></i> '.$row["name"].'  <span class="w3-badge w3-red">'.$row["nom"].'</span></a></p>';	
					}
				?>
                <p align="center" class="w3-text-indigo"><strong>All Professors</strong></p>
                <?php
					$sql2="Select * from professor";
					$result2=mysqli_query($link,$sql2);
					while($row2=mysqli_fetch_array($result2))
					{
						echo '<p><a href="messages.php?fac='.$row2["mail"].'"><i class="fa fa-circle w3-text-grey"></i> '.$row2["name"].' </a></p>';	
					}
				?>
            </div>
        </div>
    </div>
</div>
</body>
</html>