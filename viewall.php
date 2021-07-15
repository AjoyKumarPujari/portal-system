<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-left"><a href="index.php">AAU COMMUNITY</a></span>
</div>
<br>
<br>
<br>
<br>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-center" style="margin-top:43px;">
  <div class="w3-card-4 w3-white w3-round " style="width:90%; margin:50px auto;">
    	<div class="w3-container w3-round w3-gray">
        	<h5 align="center">LATEST NEWS </h5>
        </div>
    	 <div class="w3-row-padding">
           <?php
		include "connect1.php";
		$sql="Select * from news order by id desc";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<div class="w3-container w3-center">
						<h4 >'.$row["1"].'<br></h4>
						<h6 align="right"> '.$row["3"].'<br></h6>
						'.$row["2"].'
						<hr>
						
					  </div>';
						}
					?>
                </table>
			
  </div>
  </div>
</div>
</body>


  </html>
 
  