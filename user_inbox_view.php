<?php
include("dbconnect.php");
session_start();
extract($_POST);
$mail=$_SESSION['user'];
echo $id=$_REQUEST['id'];
 
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
<style type="text/css">
<!--
.style1 {color: #002561}
-->
</style>
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
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge"></span></a>
                 
               </li>
               <li class="dropdown note"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1"></span></a>
                   <ul class="dropdown-menu two">
                   
             
                  
                    
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
       <!--//outer-wp-->
       <div class="outter-wp">
         <!--/sub-heard-part-->
         <div class="sub-heard-part">
           <ol class="breadcrumb m-b-0">
             <li><a href="user_home.php">Home</a></li>
             <li class="active">Inbox</li>
           </ol>
         </div>
         <!--/sub-heard-part-->
         <!--/inbox-->
         <div class="inbox-mail">
   
           <!-- tab content -->
           <div class="col-md-8 tab-content tab-content-in">
             <div class="tab-pane active text-style" id="tab1">
               <div class="inbox-right">
                 <div class="mailbox-content">
                   <table class="table">
                     <tbody>
                       
					   <?php
					   
					   $xyz=mysql_query("select * from user_messages where id='$id'");
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
                         <td width="37%" class="table-img"><p><img src="img/<?php echo $rimage;?>" alt="" height="50px" width="50px" /><span class="mar"><?php echo $dd;?>
                           
                         </span> </p>
                           <p>&nbsp;</p>                         </td>
                         <td class="table-text"><p>&nbsp;</p>
                           <p><span class="mar"><?php echo $rname;?></span></p>
                           <p>&nbsp;</p>
                           <h6 class="style1"><span class="fabo-value-label">Subject :</span> <?php echo $row['subject'];?></h6>
                           <h6 class="style1"><span class="fabo-value-label">Message :</span> <?php echo $row['message'];?></h6></td>
                         <td width="13%" class="march">&nbsp;</td>
                       </tr>
					   <?php
					   }
					   
					   ?>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
             <div class="tab-pane text-style" id="tab2">
               <div class="inbox-right">
                 <div class="mailbox-content">
                   <div class="mail-toolbar clearfix">
                     <div class="float-left">
                       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Forums</a></li>
                               <li><a href="#">Updates</a></li>
                               <li><a href="#">Spam</a></li>
                               <li><a href="#">Trash</a></li>
                               <li><a href="#">New</a></li>
                             </ul>
                         </div>
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Work</a></li>
                               <li><a href="#">Family</a></li>
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Primary</a></li>
                               <li><a href="#">Promotions</a></li>
                               <li><a href="#">Forums</a></li>
                             </ul>
                         </div>
                       </div>
                     </div>
                     <div class="float-right">
                       <div class="dropdown"> <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cog icon_8"></i> <i class="fa fa-chevron-down icon_8"></i>
                             <div class="ripple-wrapper"></div>
                         </a>
                           <ul class="dropdown-menu float-right">
                             <li> <a href="#" title=""> <i class="fa fa-pencil-square-o icon_9"></i> Edit </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-calendar icon_9"></i> Schedule </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-download icon_9"></i> Download </a> </li>
                             <li> <a href="#" class="font-red" title=""> <i class="fa fa-times" icon_9=""></i> Delete </a> </li>
                           </ul>
                       </div>
                     </div>
                   </div>
                   <table class="table">
                     <tbody>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in1.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="mar">Market</span> </td>
                         <td class="march"> in 5 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in2.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="work">work</span> </td>
                         <td class="march"> in 5 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in3.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="fam">Family</span> </td>
                         <td class="march"> in 4 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in4.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="ur">urgent</span> </td>
                         <td class="march"> in 4 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in5.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td></td>
                         <td class="march"> in 3 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in6.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="fam">Family</span> </td>
                         <td class="march"> in 2 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
             <div class="tab-pane text-style" id="tab3">
               <div class="inbox-right">
                 <div class="mailbox-content">
                   <div class="mail-toolbar clearfix">
                     <div class="float-left">
                       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Forums</a></li>
                               <li><a href="#">Updates</a></li>
                               <li><a href="#">Spam</a></li>
                               <li><a href="#">Trash</a></li>
                               <li><a href="#">New</a></li>
                             </ul>
                         </div>
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Work</a></li>
                               <li><a href="#">Family</a></li>
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Primary</a></li>
                               <li><a href="#">Promotions</a></li>
                               <li><a href="#">Forums</a></li>
                             </ul>
                         </div>
                       </div>
                     </div>
                     <div class="float-right">
                       <div class="dropdown"> <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cog icon_8"></i> <i class="fa fa-chevron-down icon_8"></i>
                             <div class="ripple-wrapper"></div>
                         </a>
                           <ul class="dropdown-menu float-right">
                             <li> <a href="#" title=""> <i class="fa fa-pencil-square-o icon_9"></i> Edit </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-calendar icon_9"></i> Schedule </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-download icon_9"></i> Download </a> </li>
                             <li> <a href="#" class="font-red" title=""> <i class="fa fa-times" icon_9=""></i> Delete </a> </li>
                           </ul>
                       </div>
                     </div>
                   </div>
                   <table class="table">
                     <tbody>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in6.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="fam">Family</span> </td>
                         <td class="march"> in 2 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in7.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="ur">urgent</span> </td>
                         <td class="march"> in 2 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in8.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td></td>
                         <td class="march"> in 2 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in9.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td></td>
                         <td class="march"> in 2 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in10.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="mar">Market</span> </td>
                         <td class="march"> in 1 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in11.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="ur">urgent</span> </td>
                         <td class="march"> in 1 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
             <div class="tab-pane text-style" id="tab4">
               <div class="inbox-right">
                 <div class="mailbox-content">
                   <div class="mail-toolbar clearfix">
                     <div class="float-left">
                       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Forums</a></li>
                               <li><a href="#">Updates</a></li>
                               <li><a href="#">Spam</a></li>
                               <li><a href="#">Trash</a></li>
                               <li><a href="#">New</a></li>
                             </ul>
                         </div>
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Work</a></li>
                               <li><a href="#">Family</a></li>
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Primary</a></li>
                               <li><a href="#">Promotions</a></li>
                               <li><a href="#">Forums</a></li>
                             </ul>
                         </div>
                       </div>
                     </div>
                     <div class="float-right">
                       <div class="dropdown"> <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cog icon_8"></i> <i class="fa fa-chevron-down icon_8"></i>
                             <div class="ripple-wrapper"></div>
                         </a>
                           <ul class="dropdown-menu float-right">
                             <li> <a href="#" title=""> <i class="fa fa-pencil-square-o icon_9"></i> Edit </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-calendar icon_9"></i> Schedule </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-download icon_9"></i> Download </a> </li>
                             <li> <a href="#" class="font-red" title=""> <i class="fa fa-times" icon_9=""></i> Delete </a> </li>
                           </ul>
                       </div>
                     </div>
                   </div>
                   <table class="table">
                     <tbody>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="fam">Family</span> </td>
                         <td class="march"> in 5 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in1.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="mar">Market</span> </td>
                         <td class="march"> in 5 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in2.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="work">work</span> </td>
                         <td class="march"> in 5 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in3.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="fam">Family</span> </td>
                         <td class="march"> in 4 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in4.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="ur">urgent</span> </td>
                         <td class="march"> in 4 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in5.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td></td>
                         <td class="march"> in 3 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
             <div class="tab-pane text-style" id="tab5">
               <div class="inbox-right">
                 <div class="mailbox-content">
                   <div class="mail-toolbar clearfix">
                     <div class="float-left">
                       <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Forums</a></li>
                               <li><a href="#">Updates</a></li>
                               <li><a href="#">Spam</a></li>
                               <li><a href="#">Trash</a></li>
                               <li><a href="#">New</a></li>
                             </ul>
                         </div>
                         <div class="btn-group"> <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                             <ul class="dropdown-menu dropdown-menu-right" role="menu">
                               <li><a href="#">Work</a></li>
                               <li><a href="#">Family</a></li>
                               <li><a href="#">Social</a></li>
                               <li><a href="#">Primary</a></li>
                               <li><a href="#">Promotions</a></li>
                               <li><a href="#">Forums</a></li>
                             </ul>
                         </div>
                       </div>
                     </div>
                     <div class="float-right">
                       <div class="dropdown"> <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cog icon_8"></i> <i class="fa fa-chevron-down icon_8"></i>
                             <div class="ripple-wrapper"></div>
                         </a>
                           <ul class="dropdown-menu float-right">
                             <li> <a href="#" title=""> <i class="fa fa-pencil-square-o icon_9"></i> Edit </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-calendar icon_9"></i> Schedule </a> </li>
                             <li> <a href="#" title=""> <i class="fa fa-download icon_9"></i> Download </a> </li>
                             <li> <a href="#" class="font-red" title=""> <i class="fa fa-times" icon_9=""></i> Delete </a> </li>
                           </ul>
                       </div>
                     </div>
                   </div>
                   <table class="table">
                     <tbody>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in1.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="mar">Market</span> </td>
                         <td class="march"> in 5 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in3.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="fam">Family</span> </td>
                         <td class="march"> in 4 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in5.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td></td>
                         <td class="march"> in 3 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in7.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="ur">urgent</span> </td>
                         <td class="march"> in 2 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in10.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="mar">Market</span> </td>
                         <td class="march"> in 1 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                       <tr class="table-row">
                         <td class="table-img"><img src="images/in11.jpg" alt="" /> </td>
                         <td class="table-text"><h6> Lorem ipsum</h6>
                             <p>Nullam quis risus eget urna mollis ornare vel eu leo</p></td>
                         <td><span class="ur">urgent</span> </td>
                         <td class="march"> in 1 days </td>
                         <td ><i class="fa fa-star-half-o icon-state-warning"></i> </td>
                       </tr>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
           <div class="clearfix"> </div>
         </div>
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
