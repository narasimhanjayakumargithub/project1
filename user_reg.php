<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['submit']))
{
if($password==$cpassword)
{
$max_qry = mysql_query("select max(id) from user_details");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
echo $qry=mysql_query("insert into user_details values('$id','$username','contact','$email','address','$password','1.png','$date','logdate','0','0','-','-','-','-')");
if($qry)
{
?>
<script language="javascript">
alert("Register Successfully..");
window.location.href="index.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert("Register Unsuccessfully..");

</script>
<?php
}
}
else
{
?>
<script language="javascript">
alert("Password Is Not Matching Check Your Password..");
</script>
<?php
}
}

?>
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
<script language="javascript">
            function buyer_register()
            {
              // alert("");
               
				if (document.form1.username.value == "")
                {
				
                    alert("Enter the Name");
                    document.form1.username.focus();
                    return false;
                }
				 if (!/^[a-zA-Z]*$/g.test(document.form1.username.value)) {
					alert("Invalid characters. Enter  Letters Only ..");
					document.form1.username.focus();
					return false;
				}
				 

				if (document.form1.email.value == "")
                {
                    alert("Enter the email");
                    document.form1.email.focus();
                    return false;
                }
                if (document.form1.email.value != "")
                {
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(document.form1.email.value.match(mailformat))  
{  
}  
else  
{  
alert("You have entered an invalid email address!");  
document.form1.email.focus();  
return false;  
}  
                }
				
				
	if (document.form1.address.value == "")
                {
                    alert("Enter the  Address");
                    document.form1.address.focus();
                    return false;
                }
				 
						
				
			
                if (document.form1.password.value == "")
                {
                    alert("Enter the Password");
                    document.form1.password.focus();
                    return false;
                }
				
				 if (document.form1.password.value != document.form1.cpassword.value == "")
                {
                    alert("Password Not Match");
                    document.form1.cpassword.focus();
                    return false;
                }
                //finishMD();
                return true;
            }
        </script>
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												<div class="error-top">
 												  <div class="login">
												    <h3 align="right" class="inner-tittle page">Cyber Bullying</h3>
                                                      <p>&nbsp;</p>
                                                      <h3 class="inner-tittle t-inner">Register</h3>
    												  <form name="form1" method="post" action="">
                                                      <input type="text" class="text" name="username" placeholder="User Name" required="" >
                                                      <input type="text" class="text" name="email" placeholder="Email-ID" required="" >
                                                      <input name="password" type="password" placeholder="Password" required="">
                                                      <input name="cpassword" type="password" placeholder="C-Password" required="">
                                                      <div class="sign-up">
                                                        <input name="reset" type="reset" value="Reset">
                                                        <input name="submit" type="submit" value="Register"  onClick="return buyer_register()">
                                                      </div>
												      <div class="clearfix"></div>
												      <div class="new">
                                                        
												        <p class="sign">Already register ? <a href="index.php">Login</a></p>
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