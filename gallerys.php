
<html>
<title>gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
a:link{
	text-decoration:none;
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top ">
 <div class="w3-bar w3-indigo w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="walls.php" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>AAU COMMUNITY</a>
 
  <a href="newses.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-newspaper-o"></i></a>
  <a href="gallerys.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Gallery"><i class="fa fa-camera"></i></a>
  <a href="messages.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-large" title="Logout">
    <i class="fa fa-sign-out"></i> 
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="newses.php" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="newses.php" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="gallerys.php" class="w3-bar-item w3-button w3-padding-large">Gellary</a>
  <a href="messages.php" class="w3-bar-item w3-button w3-padding-large">Message</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>

</div>




<div class="w3-card w3-round w3-light-gray  "><br><br><br>
        <p>  <h4 align="center"> GALLERY</h4></p>
  
     <div>     
    <p align="center"><a class="w3-button w3-round w3-indigo w3-hover-blue-gray fa fa-plus"  href="gallery/indexs.php">ADD PHOTO</a></p>
    <br>
    <div class="w3-row-padding">
    	<?php
			include "connect1.php";
			$sql="Select * from gallery";
			$result=mysql_query($sql,$link);
			while($row=mysql_fetch_array($result))
			{
	
				echo '<div class="w3-quarter w3-center">
						<img src="gallery/'.$row["photo"].'" class="w3-card" style="width:100%; height:180px;"/><br><br>
						'.$row["caption"].'
					  </div>';	
				
			}
		?>
    </div>
   

 </div>
</div>
</body>
</html>