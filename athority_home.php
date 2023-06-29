<?php
include("dbconnect.php");
session_start();
extract($_POST);

 

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
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
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
									 
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
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
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

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
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
					 		   							   		
 								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<div class="outter-wp">
								<!--custom-widgets-->
												<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Total</h5>
																<h4> Users</h4>
															</div>
															<div class="stats-right">
																<label>0</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Total</h5>
																<h4>Messages</h4>
															</div>
															<div class="stats-right">
																<label> 0</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Total</h5>
																<h4>Spam</h4>
															</div>
															<div class="stats-right">
																<label>0</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-last">
															<div class="stats-left">
																<h5>Total</h5>
																<h4>Blocked</h4>
															</div>
															<div class="stats-right">
																<label>0</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
												  </div>
												</div>
												<!--//custom-widgets-->
												<!--/candile-->
												<!--/candile-->
                                                <!--/charts-->
<div class="charts">
												  <div class="chrt-inner">
												    <div class="chrt-bars">
												      <div class="clearfix"> </div>
													</div>										
												<!--/float-charts-->
												<!--//weather-charts-->
<div class="graph-visualization">
															<div class="col-md-6 map-1">
																<h3 class="sub-tittle">Weather </h3>
																	<div class="weather">
																	<div class="weather-top">
																		<div class="weather-top-left">
																			<div class="degree">
																			<figure class="icons">
																				<canvas id="partly-cloudy-day" width="64" height="64">
																				</canvas>
																			</figure>
																			<span>37°</span>
																			<div class="clearfix"></div>
																			</div>
																<script>
																			 var icons = new Skycons({"color": "#002561"}),
																				  list  = [
																					"clear-night", "partly-cloudy-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
																			<p>FRIDAY
																				<label>13</label>
																				<sup>th</sup>
																				AUG
																			</p>
																		</div>
																		<div class="clearfix"> </div>
																	</div>
																	<div class="weather-bottom">
															<div class="weather-bottom1">
																<div class="weather-head">
																<h4>Cloudy</h4>
																<figure class="icons">
																	<canvas id="cloudy" width="40" height="40"></canvas>
																</figure>					
																	<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "cloudy",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
																<h6>20°</h6>
																<div class="bottom-head">
																	<p>Monday</p>
																</div>
															</div>
															</div>
															<div class="weather-bottom1 ">
																<div class="weather-head">
															<h4>Sunny</h4>
															<figure class="icons">
																<canvas id="clear-day" width="40" height="40">
																</canvas>	
																
															</figure>					
																	<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
															<h6>37°</h6>
															<div class="bottom-head">
																	<p>Tuesday</p>
																</div>
															</div>
															</div>
															<div class="weather-bottom1">
																<div class="weather-head">
																<h4>Rainy</h4>
																<figure class="icons">
																	<canvas id="sleet" width="40" height="40">
																	</canvas>
																</figure>
																<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
														
																<h6>7°</h6>
																<div class="bottom-head">
																	<p>Wednesday</p>
																</div>
															</div>
															</div>
															<div class="weather-bottom1 ">
																<div class="weather-head">
															<h4>Snowy</h4>
															<figure class="icons">
																	<canvas id="snow" width="40" height="40">
																	</canvas>
																</figure>
																<script>
																			 var icons = new Skycons({"color": "#00C6D7"}),
																				  list  = [
																					"clear-night", "clear-day",
																					"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
																					"fog"
																				  ],
																				  i;

																			  for(i = list.length; i--; )
																				icons.set(list[i], list[i]);

																			  icons.play();
																		</script>
															<h6>-10°</h6>
															<div class="bottom-head">
																	<p>Thursday</p>
																</div>
																</div>
															</div>
															<div class="clearfix"> </div>
														</div>

																</div>

															</div>
															<div class="col-md-6 map-2">
																 <div class="profile-nav alt">
																	<section class="panel">
																		<div class="user-heading alt clock-row terques-bg">
																			<h3 class="sub-tittle clock">Easy Clock </h3>
																		</div>
																			<ul id="clock">
																				<li id="sec"></li>
																				<li id="hour"></li>
																				<li id="min"></li>
																			</ul>

																		<ul class="clock-category">
																			<li>
																				<a href="#" class="active">
																					<img src="images/time.png" alt="">
																					<span>Clock</span>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<img src="images/alarm.png" alt="">
																					<span>Alarm</span>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<img src="images/watch.png" alt="">
																					<span>Stop watch</span>
																				</a>
																			</li>
																			<li>
																				<a href="#">
																					<img src="images/timer.png" alt="">
																					<span>Timer</span>
																				</a>
																			</li>
																		</ul>

																	</section>

																</div>
															</div>
															<div class="clearfix"> </div>
													</div>

												<!--//charts-->
												<div class="area-charts">
												  <div class="clearfix"></div>		
													</div>
										<!--/bottom-grids-->		 
									<div class="bottom-grids">
										<div class="dev-table">
										  <div class="clearfix"></div>		
										
									  </div>
										</div>
									<!--//bottom-grids-->
									
									</div>
									<!--/charts-inner-->
						  </div>
										<!--//outer-wp-->
		 </div>
									 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="#" target="_blank">Admin.</a></p>
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
									  <a href="athority_home.php"><img src="img/<?php echo $img;?>" height="70" width="70"></a>
 
									  <a href="athority_home.php"><span class=" name-caret">Authority</span></a>
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