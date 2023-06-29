<?php
include("dbconnect.php");
session_start();
extract($_POST);
$mail=$_SESSION['user'];
 
 
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
          
             <div class="close"><img src="images/cross.png" /></div>
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
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge"></span></a>
                 
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
       <!--//outer-wp-->
       <div class="outter-wp">
         <!--/sub-heard-part-->
         <div class="sub-heard-part">
           <ol class="breadcrumb m-b-0">
             <li><a href="index.html">Home</a></li>
             <li class="active">Inbox</li>
           </ol>
         </div>
         <!--/sub-heard-part-->
         <!--/inbox-->
         <table class="table">
           <tbody>
             <?php
					   
					   $xyz=mysql_query("select * from user_messages where status='0' and receiver='$mail'");
 while($row=mysql_fetch_array($xyz))
				   {
				   $rimage="";
				   $rname="";
				   $dd=$row['sender']; 
				   $xyz1=mysql_query("select * from user_details where email='$dd'");
				    while($row1=mysql_fetch_array($xyz1))
					{
					 $rimage=$row1['image'];
					 $rname=$row1['name'];
					
					}
				   
				    
					   ?>
             <tr class="table-row">
               <td class="table-img"><img src="img/<?php echo $rimage;?>" alt="" height="50px" width="50px" /> </td>
               <td class="table-text"><h6><?php echo $row['subject'];?></h6>
                   <p><?php echo $row['message'];?></p></td>
               <td><span class="mar"><?php echo $rname;?> </span> </td>
               <td class="march"><?php echo $row['cdate'];?> </td>
               <td >&nbsp;</td>
               <td><div class="dropdown">
                   <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cog icon_8"></i> <i class="fa fa-chevron-down icon_8"></i>
                   <div class="ripple-wrapper"></div>
                 </a>
                   <ul class="dropdown-menu float-right">
                     <li> <a href="user_inbox_view.php?id=<?php echo $row['id'];?>" title=""> <i class="fa fa-pencil-square-o icon_9"></i> View </a> </li>
                     <li> <a href="user_inbox_delete.php?id=<?php echo $row['id'];?>" class="font-red" title=""> <i class="fa fa-times" icon_9=""></i> Delete </a> </li>
                   </ul></td>
             </tr>
             <?php
					   }
					   
					   ?>
           </tbody>
         </table>
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
