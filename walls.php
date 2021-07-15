<?php
 session_start();
 include 'connect.php';
 $email=$_SESSION["uname"];
 $sql="Select * from student where mail='$email'";
 $result=mysqli_query($link,$sql);
 $row=mysqli_fetch_array($result);
 $name=$row[1];
?>
<!DOCTYPE html>
<html>
<title>AAU Portal System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
a:link{
	text-decoration:none;
}
</style>
<body class="w3-theme-l5">

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
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $name; ?></h4>
         <p class="w3-center"><img src="<?php echo 'addstudents/'.$row["photo"];?>" class="w3-circle" style="height:120px;width:120px" alt="Avatar"></p>
         <hr>
         <p align="center"><i class="fa fa-vcard-o fa-fw w3-text-theme"></i> <a href="studentprofile.php?mail=<?php echo $email;?>">My Profile</a></p>
        </div>
      </div>
      <br>
      
      
      <br>
      
      
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity"><strong>My Wall</strong></h6>
              <a onClick="document.getElementById('id01').style.display='block'"><p contenteditable="true" class="w3-border w3-padding">Post something.... Click Here</p></a>
            </div>
          </div>
        </div>
      </div>

<!--Post Starts Here-->
	<?php
		$str="Select * from posts order by id desc";
		$result=mysqli_query($link,$str);
		while($row=mysqli_fetch_array($result))
		{
			$mid=$row["postby"];
			$mtype=$row["mtype"];
			$mname="";
			$photo="";
			if($mtype=="Professor")
			{
				$str1="Select name,photo from professor where mail='$mid'";
				$result1=mysqli_query($link,$str1);
				$row1=mysqli_fetch_array($result1);
				$mname=$row1["name"];
				$photo=$row1["photo"];
			}
			else
			{
				$str1="Select name,photo from student where mail='$mid'";
				$result1=mysqli_query($link,$str1);
				$row1=mysqli_fetch_array($result1);
				$mname=$row1["name"];
				$photo=$row1["photo"];
			}
			echo '<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
					<div style="margin-bottom:16px; overflow:hidden;">
						<div class="w3-left w3-margin-right">';
						if($mtype=="Professor")
						{
							echo '<img src="addteachers/'.$photo.'" alt="member" class="w3-circle" width="60" height="60">';
						}
						else
						{
							echo '<img src="addstudents/'.$photo.'" alt="member" class="w3-circle" width="60" height="60">';
						}
						echo' </div>
						<div class="w3-left">
							<h4>'.$mname.'</h4>
						</div>
						<div class="w3-right w3-small" style="padding-top:16px;">
							Posted On: '.$row["date"].'&nbsp;&nbsp;&nbsp;&nbsp;';
						if($mid==$email)
						{	
							echo '<a href="delposts.php?id='.$row[0].'" class="w3-btn w3-red">Remove Post</a>';
						}
			echo '</div>
					</div>
			';
			if($row["photo"]!="NP")
			{
				echo '<div><img src="'.$row["photo"].'" style="width:70%" class=" w3-border"></div>';	
			}
			echo '<p>'.$row["post"].'</p>';
        	echo '<a onClick="showc(\'csec'.$row[0].'\')"><button type="button" class="w3-button w3-indigo w3-margin-bottom w3-small"><i class="fa fa-comments"></i>  View/Post Comments</button></a> ';
			echo '<span class="w3-tiny">'.$row["comment"].' Comments</span>';
			//Comment Section starts
			echo '<div style="display:none; padding-top:8px;" id="csec'.$row[0].'">';
			echo '<div class="w3-left" style="margin-bottom:10px;">
					:::Comments:::
				</div>';
			echo '<div class="w3-right" style="margin-bottom:10px;">
					<a onClick="hidec(\'csec'.$row[0].'\')" class="w3-btn w3-white w3-text-red w3-tiny"><i class="fa fa-sort-up w3-large"></i></a>
				</div>';
			echo '<div style="padding-top:30px;">';
			$str2="Select * from comment where topicid='".$row[0]."' order by id desc";
			$result2=mysqli_query($link,$str2);
			
			while($row2=mysqli_fetch_array($result2))
			{
				$mid=$row2["postby"];
				
				$rec=mysqli_query($link,"Select name from professor where mail='$mid'");
				$c=mysqli_num_rows($rec);
				if($c==0)
				{
					$rec=mysqli_query($link,"Select name from student where mail='$mid'");	
				}
				$r=mysqli_fetch_array($rec);
				echo '<p align="left" class="w3-small w3-border" style="padding:8px;">'.$row2["comment"].'<br>Post by: '.$r["name"].' on '.$row2["date"].'</p>';	
			}
			echo '</div>';		
			echo '<form method="post" action="postcomments.php">
					<input type="hidden" name="pid" value="'.$row[0].'">
					<p style="margin-top:5px;"><textarea name="comment" required class="w3-input w3-border" placeholder="Type Comment Here..."></textarea></p>
					<p align="right"><input type="submit" name="pc" value="Post Comment" class="w3-btn w3-indigo w3-small"></p>
				 </form>
				</div>';
					
			echo '</div>';	
		}
	?>
      
    </div>
    
    
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p align="center"><i class="fa fa-building w3-xxlarge w3-text-indigo"></i></p>
          <p><strong><a href="viewdepts.php">Department</a></strong></p>
        </div>
      </div>
      <br>
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p align="center"><i class="fa fa-user-circle-o w3-xxlarge w3-text-indigo"></i></p>
          <p><strong><a href="viewteacher.php">Teacher</a></strong></p>
        </div>
      </div>
      <br>
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p align="center"><i class="fa fa-user-circle-o w3-xxlarge w3-text-indigo"></i></p>
          <p><strong><a href="viewstudent.php">Student</a></strong></p>
        </div>
      </div>
      <br>
       <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p align="center"><i class="fa fa-file-o w3-xxlarge w3-text-indigo"></i></p>
          <p><strong><a href="viewattendences.php">Attendence</a></strong></p>
        </div>
      </div>
      
       <br>
       <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p align="center"><i class="fa fa-calendar w3-xxlarge w3-text-indigo"></i></p>
          <p><strong><a href="viewtimetables.php">Time Table</a></strong></p>
        </div>
      </div>
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>



<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-pblack w3-display-middle w3-animate-opacity w3-round-medium"  style="width:450px;">
      <div class="w3-container">
        <a href="#" onclick="document.getElementById('id01').style.display='none'" class="w3-display-topright" style="text-decoration:none;"><i class="fa fa-window-close w3-xxlarge w3-text-red"></i>&nbsp;&nbsp;</a>
        <h5 align="center">Create New Post</h5>
        <div class="w3-container w3-small">
          <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="saveposts.php">
            <p><textarea name="topic" required class="w3-input w3-border" placeholder="Type Here..."></textarea></p>
            <p><input type="file" name="file1" id="file1"></p>
            <p><input type="submit" name="submit" value="submit" class="w3-btn w3-block w3-indigo"></p>
          </form>
        </div>
      </div>
    </div>
</div>
<div style=" position:fixed; bottom:20px;  right:0px" class=" w3-button w3-circle w3-indigo w3-center" title="Back to Top"> <a href="wall.php"><i class="material-icons">arrow_upward</i></a>
</div>

<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
function showc(id) {
    var x = document.getElementById(id);
	x.style.display="block";
}
function hidec(id) {
    var x = document.getElementById(id);
	x.style.display="none";
}
</script>

</body>
<footer class="w3-container w3-white w3-center w3-opacity-min">
  <p>Find us on social media.<br>
 <a href="https://www.facebook.com/pages/Assam-Agricultural-University/109577782393756?ref=br_rs"class="fa fa-facebook-official w3-hover-opacity"></a>
  <a href="https://www.instagram.com/explore/locations/241121773/assam-agricultural-university/" class="fa fa-instagram w3-hover-opacity"></a>
  <a href="http://www.aau.ac.in/" class="fa fa-globe w3-hover-opacity"></a><br>
 
  All copyrights reserved
  </p>
 
 
</footer>
</html> 