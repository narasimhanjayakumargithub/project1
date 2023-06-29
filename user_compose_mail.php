<?php
include("dbconnect.php");
session_start();
extract($_POST);
$mail=$_SESSION['user'];
$name="";
$contact="";
$address="";
$image="";
$dob="";


$d = date("F j, Y, g:i a");



$xyz=mysql_query("select * from user_details where email='$mail'");
while($row=mysql_fetch_array($xyz))
{
$name=$row['name'];		
$contact=$row['contact'];
$address=$row['address'];
$image=$row['image'];
$dob=$row['dob'];
		
}
 
 if(isset($_POST['btn']))
{
$max_qry = mysql_query("select max(id) from user_messages");
	$max_row = mysql_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;
echo $qry=mysql_query("insert into user_messages values('$id','$mail','$to','$sub','$mes','0','0','$d')");
if($qry)
{
?>
<script language="javascript">
alert("Send Successfully..");
window.location.href="user_compose_mail.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
alert("Sending Failed");
 </script>
<?php
}


}
 
 
 
 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Chat</title>
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
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
   <div class="left-content">
     <div class="inner-content">
       <!-- header-starts -->
       <div class="header-section">
         <!--menu-right-->
         <div class="top_menu">
           <div class="main-search">
             <form>
               <input name="text" type="text" class="text" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" value="Search"/>
               <input name="submit" type="submit" value=""/>
             </form>
           </div>
        
           <script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
           <!--/profile_details-->
           <div class="profile_details_left">
             <ul class="nofitications-dropdown">
               <li class="dropdown note dra-down">
                 
                 <script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
               </li>
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></a>
                   <ul class="dropdown-menu two first">
                     <li>
                       <div class="notification_header">
                         <h3>You have 3 new messages </h3>
                       </div>
                     </li>
                     <li><a href="#">
                       <div class="user_img"><img src="images/1.jpg" alt=""></div>
                       <div class="notification_desc">
                         <p>Lorem ipsum dolor sit amet</p>
                         <p><span>1 hour ago</span></p>
                       </div>
                       <div class="clearfix"></div>
                     </a></li>
                     <li class="odd"><a href="#">
                       <div class="user_img"><img src="images/in.jpg" alt=""></div>
                       <div class="notification_desc">
                         <p>Lorem ipsum dolor sit amet </p>
                         <p><span>1 hour ago</span></p>
                       </div>
                       <div class="clearfix"></div>
                     </a></li>
                     <li><a href="#">
                       <div class="user_img"><img src="images/in1.jpg" alt=""></div>
                       <div class="notification_desc">
                         <p>Lorem ipsum dolor sit amet </p>
                         <p><span>1 hour ago</span></p>
                       </div>
                       <div class="clearfix"></div>
                     </a></li>
                     <li>
                       <div class="notification_bottom"> <a href="#">See all messages</a> </div>
                     </li>
                   </ul>
               </li>
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></a>
                   <ul class="dropdown-menu two">
                     <li>
                       <div class="notification_header">
                         <h3>You have 5 new notification</h3>
                       </div>
                     </li>
                     <li><a href="#">
                       <div class="user_img"><img src="images/in.jpg" alt=""></div>
                       <div class="notification_desc">
                         <p>Lorem ipsum dolor sit amet</p>
                         <p><span>1 hour ago</span></p>
                       </div>
                       <div class="clearfix"></div>
                     </a></li>
                     <li class="odd"><a href="#">
                       <div class="user_img"><img src="images/in5.jpg" alt=""></div>
                       <div class="notification_desc">
                         <p>Lorem ipsum dolor sit amet </p>
                         <p><span>1 hour ago</span></p>
                       </div>
                       <div class="clearfix"></div>
                     </a></li>
                     <li><a href="#">
                       <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                       <div class="notification_desc">
                         <p>Lorem ipsum dolor sit amet </p>
                         <p><span>1 hour ago</span></p>
                       </div>
                       <div class="clearfix"></div>
                     </a></li>
                     <li>
                       <div class="notification_bottom"> <a href="#">See all notification</a> </div>
                     </li>
                   </ul>
               </li>
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></a>
                   <ul class="dropdown-menu two">
                     <li>
                       <div class="notification_header">
                         <h3>You have 9 pending task</h3>
                       </div>
                     </li>
                     <li><a href="#">
                       <div class="task-info"> <span class="task-desc">Database update</span><span class="percentage">40%</span>
                           <div class="clearfix"></div>
                       </div>
                       <div class="progress progress-striped active">
                         <div class="bar yellow" style="width:40%;"></div>
                       </div>
                     </a></li>
                     <li><a href="#">
                       <div class="task-info"> <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                           <div class="clearfix"></div>
                       </div>
                       <div class="progress progress-striped active">
                         <div class="bar green" style="width:90%;"></div>
                       </div>
                     </a></li>
                     <li><a href="#">
                       <div class="task-info"> <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                           <div class="clearfix"></div>
                       </div>
                       <div class="progress progress-striped active">
                         <div class="bar red" style="width: 33%;"></div>
                       </div>
                     </a></li>
                     <li><a href="#">
                       <div class="task-info"> <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                           <div class="clearfix"></div>
                       </div>
                       <div class="progress progress-striped active">
                         <div class="bar  blue" style="width: 80%;"></div>
                       </div>
                     </a></li>
                     <li>
                       <div class="notification_bottom"> <a href="#">See all pending task</a> </div>
                     </li>
                   </ul>
               </li>
               <div class="clearfix"></div>
             </ul>
           </div>
           <div class="clearfix"></div>
           <!--//profile_details-->
         </div>
         <!--//menu-right-->
         <div class="clearfix"></div>
       </div>
       <!-- //header-ends -->
       <!--outter-wp-->
       <div class="outter-wp">
         <!--/sub-heard-part-->
         <div class="sub-heard-part">
           <ol class="breadcrumb m-b-0">
             <li><a href="index.html">Home</a></li>
             <li class="active">Compose Mail</li>
           </ol>
         </div>
         <!--/sub-heard-part-->
         <!--/inbox-->
         <div class="inbox-mail">
         
           <!-- tab content -->
           <form name="form1" method="post" action="">
             <table width="100%" border="0">
               <tr>
                 <td width="33%">&nbsp;</td>
                 <td width="62%"><div class="col-md-8 tab-content tab-content-in">
                   <div class="inbox-right">
                     <div class="mailbox-content">
                       <!--Compose New Message -->
                       <div class="compose-mail-box">
                         <div class="compose-bg"> Compose New Message </div>
                         <div class="panel-body">
                           <div class="alert alert-info"> Please fill details to send a new message </div>
                           <input name="to" type="text" class="form-control1 control3" placeholder="To :" required="">
                           <input name="sub" type="text" class="form-control1 control3" placeholder="Subject :" required="">
                           <textarea name="mes" rows="6" class="form-control1 control2" placeholder="Message :" required=""></textarea>
                           <input name="btn" type="submit" value="Send Message">
                         </div>
                       </div>
                       <!--//Compose New Message -->
                     </div>
                   </div>
                 </div></td>
                 <td width="5%">&nbsp;</td>
               </tr>
             </table>
           </form>
           <div class="clearfix"> </div>
         </div>
       </div>
       <!--//outer-wp-->
       <!--footer section start-->
       <footer>
          <p>&copy  All Rights Reserved | Design by <a href="#" target="_blank">Admin</a></p>
       </footer>
       <!--//footer section end-->
     </div>
   </div>
   <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="user_home.php"> <span id="logo"> <h1>Email</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
							<?php
							$mail=$_SESSION['user'];
$img="";
$user="";
$xyz=mysql_query("select * from user_details where email='$mail'");
		while($row=mysql_fetch_array($xyz))
		{
		$img=$row['image'];
		$user=$row['name'];
		}
							?>
									  <a href="user_home.php"><img src="img/<?php echo $img;?>" height="70" width="70"></a>
 
									  <a href="user_home.php"><span class=" name-caret"><?php echo $user;?></span></a>
									<ul>
									<li><a class="tooltips" href="user_profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="user_profile_update.php"><span>Update</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
							  </ul>
				  </div>
							   <!--//down-->
                          <?php
include("user_menu.php");
 

?>
     </div>
							  <div class="clearfix"></div>		
</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
