<?php
include("dbconnect.php");
session_start();
extract($_POST);
$xyz=mysql_query("select * from user_details where status='2'");
 

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
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>
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
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>
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
         <!--sub-heard-part-->
         <div class="sub-heard-part">
           <ol class="breadcrumb m-b-0">
             <li><a href="index.html">Home</a></li>
             <li class="active">View</li>
           </ol>
         </div>
         <!--//sub-heard-part-->
         <div class="graph-visual tables-main">
           <h2 class="inner-tittle">Blocked User  Details</h2>
           <div class="graph">
             <div class="tables">
               <table class="table">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Contact</th>
                     <th>Email</th>
                     <th>Address</th>
                     <th>DOB</th>
                     <th>IP</th>
                     <th>MAC</th>
                     <th>Latitude</th>
                     <th>Longitude</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php
				   $a=1;
				   while($row=mysql_fetch_array($xyz))
				   {
				   
				   $b=$a%2;
				   if($b==0)
				   {
				   ?>
                   <tr class="active">
                     <?php
					
					}
					else
					{
					
					?>
                   <tr class="info">
                     <?php

}
?>
                     <th scope="row"><?php  echo $a; ?></th>
                     <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['contact'];?></td>
                     <td><?php echo $row['email'];?></td>
                     <td><?php echo $row['address'];?></td>
                     <td><?php echo $row['dob'];?></td>
                     <td><?php echo $row['ip'];?></td>
                     <td><?php echo $row['mac'];?></td>
                     <td><?php echo $row['latitude'];?></td>
                     <td><?php echo $row['longitude'];?></td>
                   </tr>
                   <?php
					   $a++;
					    }
					?>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
         <!--//graph-visual-->
       </div>
       <!--//outer-wp-->
       <!--footer section start-->
       <footer>
         <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
       </footer>
       <!--footer section end-->
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
							 
$img="1.png";
 
							?>
									  <a href="user_home.php"><img src="img/<?php echo $img;?>" height="70" width="70"></a>
 
									  <a href="user_home.php"><span class=" name-caret">Authority</span></a>
									<ul>
  										<li><a class="tooltips" href="index.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
							  </ul>
				  </div>
							   <!--//down-->
                          <?php
include("athority_menu.php");
 

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