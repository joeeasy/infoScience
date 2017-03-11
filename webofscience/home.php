
<?php
ob_start();
	session_start();
require_once('../includes/connect.php');
if(!isset($_SESSION['email']))
	{
	header("Location: login.php");
	}else{
		$login_session=$_SESSION['email'];
	}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Responsive Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title-->
        <title>WEB OF SCIENCE</title>
        <!--Bootstrap Css-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Font-awesome-->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!--Fonts Form Google Web Fonts-->
        <link href="css/font.css" rel="stylesheet" type='text/css'>
        <link href="css/font2.css" rel="stylesheet" type='text/css'>
        <!--Responsive Mobile Menu-->
        <link rel="stylesheet" href="css/slicknav.css" />
        <!--Revolation Slider-->
        <link href="rs-plugin/css/settings.css" rel="stylesheet">
        <!--Carousel Slider-->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <!--Main Style Css-->
        <link href="style.css" rel="stylesheet">
        <!--Responsive-->
        <link href="css/responsive.css" rel="stylesheet">


        <!--[if lt IE 9]>
         <script src="">js/html5shiv.min.js</script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
		<script type="text/javascript">
			function hide(){
				var div = document.getElementById('settings');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidea(){
				var div = document.getElementById('settings1');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hideb(){
				var div = document.getElementById('settings2');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidec(){
				var div = document.getElementById('settings3');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hided(){
				var div = document.getElementById('settings4');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidee(){
				var div = document.getElementById('settings5');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
		</script>
		<style>
			#settings{
				display: none;
			}
			#settings1{
				display: none;
			}
			#settings2{
				display: none;
			}
			#settings3{
				display: none;
			}
			#settings4{
				display: none;
			}
			#settings5{
				display: none;
				position: absolute;
				z-index: 1;
				left: 140px;
				top: 10px;
			}
			#pint{
				cursor: pointer;
				width: 150px;
				color: black;
				font-family: arial;
				font-weight: bold;
				text-transform: uppercase;
			}
			#pnt{
				cursor: pointer;
			}
			#subsett{
				padding: 5px;
			}
			.now{
				opacity: 0.5;
			}
			#subsett:hover{
				cursor: pointer;
				opacity: 0.5;
			}
		</style>
    </head>
    <body class="home-2">
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        <!--Start Mobile Menu Area-->
        		
      
        <!--End Mobile Menu Area-->
        
        <!--Start Header area  -->
		<div id="wrapper" class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
        <div class="header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="row">  
                        <div class="col-md-7 col-lg-7">
                            <div class="header_top_menu">
                                <ul>
                                    <li><a href="#" style="color: grey;">Web of Science</a></li>
                                    <li><a href="#">InCities</a></li>
                                    <li><a href="#">Journal Citation Reports</a></li>
                                    <li><a href="#">Essential Science Indicators</a></li>
                                    <li><a href="#">EndNote</a></li>
                                </ul>
                            </div>
                        </div> 
						<div class="col-md-2 col-lg-2 col-md-offset-1 col-lg-offset-1">
                            <div class="header_top_menu">
                                <ul>
                                    <li><a href="logout.php?logout">Sign Out</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="header_bottom_area" style="background-color: grey;">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-5 col-lg-5">
                            <div class="logo" style="margin-top: 40px;">
                                <a href="webOfScience.html"><h1 style="color: orange;">WEB OF SCIENCE</h1>
                                </a>
                            </div>
                        </div>
						<div class="col-md-3 col-lg-3 col-md-offset-2 col-lg-offset-2" style="margin-top: 20px; margin-bottom: 10px;">
                            <div class="logo">
                               <a href="#"><h2 style="color: white;">Institute Of Science Information (ISI)</h2>
                                </a>
								
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
			<div class="mainmenu_area">
                <div>
                    <div>
                        <div>
                            <div class="mainmenu nav">
								<nav>
									<ul id="nav">
										<li class="current" style="padding-left: 20px; padding-right: 20px;"><a href="#" style="font-weight: bold; font-size: 15px;">Search</a></li>
										<li><a href="#" style="font-weight: bold; font-size: 15px;">All Databases</a>
											<ul name="cat">                                       
												<?php
												include("../includes/connect.php");
												$qry = "select * from search_db";
												$run = $con->query($qry);
												 while($row = $run->fetch_assoc())
												{
												
												$cat_title= $row['DB_name'];
												echo "<li><a href='#'>$cat_title</a></li>";

												}
												?>
											</ul>
										</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--End Mainmenu -->
        </div>
		
        <!--End Header Area-->
        <!--Start Slider Area  -->
       
        <!--End Slider Area-->
        <!--Start Promotions Area  -->
        <section class="promotions_area section_padding section_gray"  style="border-bottom: 1px solid grey; margin-bottom: 0px; padding-bottom: 0px; padding-left: 30px;">
            <div class="container" style=" width: 100%;">
                <div class="row">
				
                    <div class="col-md-12 col-lg-12">
					<h4 style="font-weight: bold; color: #424890;">Basic Search<img src="img/icon-arrow-right-b-128---Copy.png" id="pnt" onclick="hidee()" style="background-color: #424890; margin-left: 10px; height: 20px; width: 20px;"></h4>
						<div id="settings5" class="section_gray" style="margin-top: 15px; border: 1px solid grey; box-shadow: 3px 2px 6px grey; width: 180px; height: 150px;">
							<div id="subsett" class="now" style="height: 30px; border-bottom: 1px solid grey;">
								<a href="webOfScience.html" style="color: black;">Basic Search</a>
							</div>
							<div id="subsett" style="height: 30px; border-bottom: 1px solid grey;">
								<a href="#" style="color: black;">Author Search</a>
							</div>
							<div id="subsett" style="height: 30px; border-bottom: 1px solid grey;">
								<a href="#" style="color: black;">Cited Reference Search</a>
							</div>
							<div id="subsett" style="height: 30px; border-bottom: 1px solid grey;">
								<a href="#" style="color: black;">Structure Search</a>
							</div>
							<div id="subsett" style="height: 30px;">
								<a href="#" style="color: black;">Advanced Search</a>
							</div>
						</div>
					
						
                        <div class="page_title text-left">
						<form name="form1" action="searchResults.php" method="GET">
						<div class="col-md-10 col-lg-10" style="padding-left: 0px; margin-bottom: 50px;">
                            
							<input class="col-md-7 col-lg-7" name="search" type="text" style="height: 30px; margin-right: 10px; border-radius: 5px; border: 1px solid #c8c8ca;" placeholder="Example: oil spill* mediterranean"/>
						
							<select class="col-md-2 col-lg-2" style="height: 30px; margin-right: 10px;" value="1">
								<option selected>Topic</option>
								<option>Topic 1</option>
								<option>Topic 2</option>
								<option>Topic 3</option>
							</select>
							<input type="submit" value="Search" style="width: 100px; font-weight: bold; height: 30px; border: 1px solid #424890; color: white; background-color:#424890;">
						<div class="col-md-7 col-lg-7" style="text-align: right; padding: 0px;">
							<a href="addAnotherField-1.html" style="color: #424890; font-weight: bold;">+ Add Another Field</a>
						</div>
						</div>
						<div class="col-md-2 col-lg-2" style="">
							<p align="right;"><a href="#" style="color: #424890;">Click here</a> for tips to improve your search</p>
						</div>
						
						</div>
                    </div>
					
                </div>
               
            </div>
        </section>
        <!--End Promotions Area-->
        <!--Start Contact Now Area  -->
        
        <!--End Contact Now Area-->
        <!--Start Work Area  -->
      
        <!--End Work Area-->
        <!--Stert All Project Area -->
        
        <!--Stert All Project Area-->
        <!--End Sercice Area -->
        <section class="work_area section_padding section_gray" style="border-bottom: 1px solid grey; padding-top: 30px;padding-left: 30px;">
            <div>
               <div>
                    <div class="col-md-7 col-lg-7">
                        <div class="page_title text-left" style="">
                            <h4>TIMESPAN</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
				<div class="col-md-11 col-lg-11" style="margin-left: 15px;">
                    <input type="radio" style="margin-right: 10px;" name="drpdwn" checked>	<select name="year" size="1">
																	<option selected>All Years</option>
																	<option>2000</option>
																	<option>2001</option>
																	<option>2002</option>
																</select>
					</input><br><br>
					<input type="radio" style="margin-right: 10px;" name="drpdwn">From <select name="year" size="1">
																	<option selected>1999</option>
																	<option>2000</option>
																	<option>2001</option>
																	<option>2001</option>
																</select> to <select name="year" size="1">
																	<option>1999</option>
																	<option>2000</option>
																	<option selected>2001</option>
																	<option>2002</option>
																</select>
					</input><br><br>
					<div style="margin-bottom: 30px;">
						<section id="pint" onclick="hide()"><img src="img/icon-arrow-right-b-128.png" style="margin-right: 10px; height: 20px; width: 20px;">More Settings</section>
						<div class="col-md-7 col-lg-7" id="settings" style="margin-top: 15px;">
							<p style="font-weight: bold; color: black;">Web of Science Core Collection: Citation Indexes</p>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;" checked>option<br>
							<input type="checkbox" name="check2" value="" style="margin-right: 10px;" checked>option<br>
							<input type="checkbox" name="check3" value="" style="margin-right: 10px;" checked>option<br>
							<input type="checkbox" name="check4" value="" style="margin-right: 10px;" checked>option<br>
							<input type="checkbox" name="check5" value="" style="margin-right: 10px;" checked>option<br>
							<input type="checkbox" name="check6" value="" style="margin-right: 10px;" checked>option<br>
							<input type="checkbox" name="check7" value="" style="margin-right: 10px;" checked>option<br>
							<p style="font-weight: bold; color: black;">Web of Science Core Collection: Chemical Indexes</p>
							<input type="checkbox" name="check8" value="" style="margin-right: 10px;" checked>option<br><span style="margin-left: 23px;">stupid</span><br>
							<input type="checkbox" name="check9" value="" style="margin-right: 10px;" checked>option<br>
							<p style="font-style: italic; margin-top: 5px;">Data Last Updated: 2013-12-13</p>
							<p style="font-weight: bold; color: black;">Auto-suggest publication names</p>
							<select name="toggle" size="1">
																	<option selected>On</option>
																	<option>Off</option>
							</select>
							<p style="font-weight: bold; color: black;"><br>(To save these permanently, <a href="" style="color:#424890;">sign in or register.</a>)</p>
							</form>
						</div>
					</div>
                </div>
				</div>
            </div>
        </section>
        <!--End Service Area-->
        <!--Our Process Area -->
        
        <!--Our Process Area-->
        <!--Our Great Team Area  -->
        
        <!--End Blog Area-->
        
        
        <!-- Footer Area  -->
        <footer class="footer_area">
            
            <div class="footer_bottom_area" >
                <div class="" >
                    <div class="row" style="">
                        <div class="col-md-12 col-lg-12" style="">
                           <div class="footer_menu">
								<nav>
									<ul>
										<li><div style="">
						<section id="pnt" onclick="hidea()"><img src="img/icon-arrow-right-b-128.png" style="margin-right: 10px; height: 20px; width: 20px;">Customer Feedback and Support</section>
						
					</div>
					<div id="settings1" style="margin-top: 10px; margin-left: 40px;width: 200px;">
							<p><a href="" style="color:#424890;">Nav option 1</a><p>
							<p><a href="" style="color:#424890;">Nav option 2</a><p>
							<p><a href="" style="color:#424890;">Nav option 3</a><p>
						</div>
					
					</li>
										<li><div style="">
						<section id="pnt" onclick="hideb()"><img src="img/icon-arrow-right-b-128.png" style="margin-right: 10px; height: 20px; width: 20px;">Additional Resources</section>
						
					</div>
					<div id="settings2" style="margin-top: 10px; width: 200px;">
							<p><a href="" style="color:#424890;">Nav option 1</a><p>
							<p><a href="" style="color:#424890;">Nav option 2</a><p>
							<p><a href="" style="color:#424890;">Nav option 3</a><p>
						</div>
					
					</li>
										<li><div style="">
						<section id="pnt" onclick="hidec()"><img src="img/icon-arrow-right-b-128.png" style="margin-right: 10px; height: 20px; width: 20px;">What's New in Web of Science</section>
						
					</div>
					<div id="settings3" style="margin-top: 10px; width: 200px;">
						</div>
					</li>
										<li><div style="">
						<section id="pnt" onclick="hided()"><img src="img/icon-arrow-right-b-128.png" style="margin-right: 10px; height: 20px; width: 20px;">Customize Your Experience</section>
						
					</div>
					<div id="settings4" style="margin-top: 10px; margin-left: 30px; width: 200px;">
							<p><a href="" style="color:#424890;">Nav option 1</a><p>
							<p><a href="" style="color:#424890;">Nav option 2</a><p>
							<p><a href="" style="color:#424890;">Nav option 3</a><p>
						</div>
					
					</li>
									</ul>
								</nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer Area-->
        </div>
        <!--jQuery-->
        <script src="js/jquery.min.js"></script>
        <!--Bootstrap-->
        <script src="js/bootstrap.min.js"></script>
        <!--Revolation Slider-->
        <script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!--Carousel Slider-->
        <script src="js/owl.carousel.min.js"></script>
        <!--Revolation Slider-->
        <script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>		
        <!--Mobile Menu Js-->
        <script src="js/jquery.slicknav.min.js"></script>
        <!--Active jQuery-->
        <script src="js/main.js"></script>
    </body>
</html>