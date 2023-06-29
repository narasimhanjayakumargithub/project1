<?php
include("dbconnect.php");
session_start();
extract($_POST);
	  $re=gethostbyname(trim(exec("localhost")));
/* ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom=ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer
$findme = "Physical";
$pmac = strpos($mycom, $findme); // Find the position of Physical text
$mac=substr($mycom,($pmac+36),17); // Get Physical Address
 echo   $re1=$mac;
   
   */

if(isset($_POST['btn']))
{

$a=$email;
$qry=mysql_query("select * from user_details where email='$email' && password='$pass' && status='1' or email='$email' && password='$pass' && status='0'");
$num=mysql_num_rows($qry);

 	if($num)
	{
	$_SESSION['user']=$a;

	//$row=mysql_fetch_array($qry);
		//$uid=$row['Id'];
		//$uname=$row['Name'];
		//$_SESSION['Name']=$uname;
	
		//echo "success";
		 $MAC = exec('getmac'); 
  
// Storing 'getmac' value in $MAC 
$MAC = strtok($MAC, ' '); 
		$qryl=mysql_query("update user_details set ip='$re',mac='$MAC',latitude='$lat',longitude='$lon'  where email='$email'");
		
	header("location:user_home.php");
	
	}
	elseif(($email=="admin")&&($pass=="admin"))
	{
	header("location:admin_home.php");
	}
	elseif(($email=="athority")&&($pass=="athority"))
	{
	header("location:athority_home.php");
	}
	else
	{
	?>
<script language="javascript">
	alert("Failed..");
	window.location.href="index.php";
	</script>
	<?php
	}

}?>

<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
<script type="text/javascript">
    function showPosition(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(function(position){
                var Latitude= position.coords.latitude; 
				var Longitude=  position.coords.longitude;
                document.getElementById("lat").value=Latitude;
				document.getElementById("lon").value =Longitude;
           			});
        } else{
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }
    }
</script>
</head> 
<body onLoad="showPosition();">
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
										 <div class="error-top">
													  <h3 align="right" class="inner-tittle page">Cyber Bullying</h3>
													  <p align="right" class="inner-tittle page">&nbsp; </p>
													  <div class="login">
														<h3 class="inner-tittle t-inner">Login</h3>
																<div class="buttons login">
																			<ul>
																				<div class="clearfix"></div>
																			</ul>
														</div>
    <form name="form1" method="post" action="">
																		<input type="hidden" class="text" placeholder="l1" id="lat" name="lat" >
																		<input type="hidden" class="text" placeholder="l2" id="lon" name="lon" >
																		<input type="text" class="text" placeholder="E-mail address"  name="email" required="">
																		<input type="password" placeholder="Password"  required="" name="pass">
																	 

																		<div class="submit">
																		  <p>
																		    <input type="submit" name="btn"  value="Login" >
																		  </p>
																		  <p>&nbsp; </p>
																		</div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
 																			<p class="sign">Do not have an account ? <a href="user_reg.php">Sign Up</a></p>
																			<div class="clearfix"></div>
																		</div>
														</form>
													  </div>

														
													</div>
													
													
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
 															</div>
 										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>