<?php
ob_start();
	session_start();
require_once('../includes/connect.php');
?>


<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
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
			function hid(){
				var div = document.getElementById('settin');
				if(div.style.display == "block"){
					div.style.display = "none";
				}
					div.style.display = "block";
			}
			function hid1(){
				var div = document.getElementById('settin');
				if(div.style.display == "none"){
					div.style.display = "block";
				}
					div.style.display = "none";
			}
		</script>
		<style>
			#settin{
				display: none;
				z-index: 1;
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
			th{
				padding: 5px;
			}
			td{
				padding: 5px;
			}
		</style>
    </head>
    <body class="home-2">
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
        	

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
                                    <li><a href="login.html">Sign Out</a></li>
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
								</nav>
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
        <section class="promotions_area section_padding section_gray"  style="border-bottom: 1px solid grey; padding-top: 0px; padding-bottom: 0px;">
            <div class="container" style=" width: 100%;">
                <div class="row">
				
                    <div class="col-md-12 col-lg-12" style="margin-top: 0px;padding: 0px;">
						<div class="col-md-9 col-lg-9" style="padding-top: 10px;padding-bottom: 10px;padding-right: 0px;">
									<div  class="col-md-4 col-lg-4" style=" padding-left: 0px;">
										<input type="submit" value="Full Text" style="font-weight: bold; background-color: #424890; color: white; margin-right: 20px;"><a href="" style="color:#424890;"><img src="img/images.png" style="width: 15px; height: 15px; margin-right: 5px;">Look up full-text</a>
									</div>
									
									<div class="col-md-5 col-lg-5" style=" padding-left: 0px; padding-right: 0px;">
										<select style="font-size: 10px;" value="1">
											<option selected>Save To EndNote online</option>
											<option>Option 2</option>
										</select>
										<input type="button" value="Add to Marked List" style="font-size: 10px;font-weight: bold;">
									</div>
						</div>	
						<div class="col-md-3 col-lg-3" style="padding: 10px; text-align: right; padding-bottom: 0px;">
							<p style="color:#424890; font-weight: bold;">
								<a href="" style="color:#424890; margin-right: 15px;">Back to List</a>
								<a href="#"><img src="img/icon-arrow-right-b-128.png" style="transform: rotate(90deg); margin-right: 5px; height: 20px; width: 20px;"></a>2 of 40
								<a href="#"><img src="img/icon-arrow-right-b-128.png" style="transform: rotate(-90deg); margin-left: 5px; height: 20px; width: 20px;"></a>
							</p>
						</div>
                    </div>
					
					
						<?php
						if(isset($_GET['viewtopic'])){
							$j_id=$_GET['viewtopic'];
						$get_j = "SELECT * FROM journal WHERE journal_id='$j_id' ";
	$run_pro = mysqli_query($con, $get_j);
	
	while($row_pro=mysqli_fetch_assoc($run_pro)){
		
		$j_id=$row_pro['journal_id'];
		$title=$row_pro['title'];
		$name=$row_pro['name'];
		
	

						
						?>
					
					
					<div class="col-md-12 col-lg-12" style="border-top: 1px solid grey; margin-top: 0px; padding: 0px; ">
						<div class="col-md-9 col-lg-9" style=" border-right: 1px solid grey;padding: 20px;">
							<h3 style="font-weight: bold; color: black;"><?php echo $row_pro['name']; ?></h3>
							<p>By: <?php echo $row_pro['aurthor_name']; ?></p>
							<p>
								<b>ISSUE:<?php echo $row_pro['issue']; ?></b><br>
								<b>Volume: <?php echo $row_pro['j_volume']; ?><br>
								<b>No Of Pages:</b> <?php echo $row_pro['no_of_pages']; ?><br>
								<b>Published:</b> <?php echo $row_pro['publish_date']; ?><br>
							</p>
							<p>
								<b>Abstract</b><br>
								<?php echo $row_pro['abstract']; ?>
							</p>
							<p>
								<b>Keywords</b><br>
								
								<?php echo $row_pro['keyword']; ?>
							</p>
							<p>
								<b>Author Information</b><br>
								<?php echo $row_pro['aurthor_name']; ?>
							</p>
							<p>
								<b>Publisher</b><br>
								SOC, BRAZILEIREF, DSBFS, ASDVSD, VBDCBVDFSBBDF, DFBFSGDS, DFJVS
							</p>
							<p>
								<b>Categories/Classification</b><br>
								Research Areas: Chemistry<br>
								Web of Science Categories: Chemistry, Multidisciplinary
							</p>
							<p>
								<b>Document Information</b><br>
								
								ISSN: <?php echo $row_pro['ISSN']; ?>
							</p>
						</div>
						<div class="col-md-3 col-lg-3" style="padding: 0px;">
							<div class="col-md-12 col-lg-12" style=" border-bottom: 1px solid grey; border-left: 2px solid orange; padding: 15px; padding-bottom: 5px;">
								<h4 style="font-weight: bold; color: black;">Citation Network</h4>
							</div>
							<div class="col-md-12 col-lg-12" style="padding: 20px;border-bottom: 1px solid grey;">
								<p>
									<a href="" style="color:#424890;">19 Times Cited</a><br>
									<a href="" style="color:#424890;">64 Cited References</a><br>
									<a href="" style="color:#424890;">View Related Records</a><br><br>
									<a href="" style="color:#424890;"><img src="img/fullscreen-11-xxl.png" style="margin-right: 5px; height: 15px; width: 15px;">View Citation Map</a><br>
									<a href="" style="color:#424890;"><img src="img/bell-xxl.png" style="margin-right: 5px; height: 15px; width: 15px;">Create Citation Alert</a><br>
									<span style="font-style: italic">(Data from Web of Science Core Collection)</span>
								</p>								
							</div>
							<div class="col-md-12 col-lg-12" style="padding: 20px;border-bottom: 1px solid grey;">
							<p>
									<b>All Times Cited Counts</b><br>
									<a href="" style="color:#424890;">21 in all Databases</a><br>
									<a href="" style="color:#424890;">19 in Web of Science Core Collection</a><br>
									<a href="" style="color:#424890;">7 in BIOSIS Citation Index</a><br>
									0 in Chinese Science Citation Database<br>
									0 in Data Citation Index<br>
									<a href="" style="color:#424890;">7 in sciELO Citation Index</a>
							</p>
							</div>
							<div class="col-md-12 col-lg-12" style="padding: 20px;">
							<p>
									<b>Most Recent Citation</b><br>
									Soures Renata F.<a href="" style="color:#424890;">Comprehensive<br> Two-Dimensional Gas</a><br>
									<a href="" style="color:#424890;">Chromatography Coupled To Time of Flight Mass Spectromectry; New Biometry Parameter Proposition for
									the Characterization of Biodegraded</a> OIL JOURNAL OF THE BRAZILLIAN CHEMICAL SOCIETY, OCT 2013.<br><br>
									<a href="" style="color:#424890; font-weight: bold;">View All</a><br>
							</p>
							</div>
						</div>
                    </div>
					
					
                </div>
               
            </div>
        </section>
		<?php }
		}?>
        <!--End Promotions Area-->
        <!--Start Contact Now Area  -->
        
        <!--End Contact Now Area-->
        <!--Start Work Area  -->
      
        <!--End Work Area-->
        <!--Stert All Project Area -->
        
        <!--Stert All Project Area-->
        <!--End Sercice Area -->
        
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
									<ul style="text-align: left;">
										<li style="margin-right: 30px;"><a href="#" style="font-weight: bold; color:#424890; font-size: 18px;">Institute Of Science Information (ISI)</a></li>
										<li style="margin-right: 30px;"><a href="#" style="font-weight: bold; color:#424890; font-size: 18px;">Terms of Use</a></li>
										<li style="margin-right: 30px;"><a href="#" style="font-weight: bold; color:#424890; font-size: 18px;">Privacy Policy</a></li>
										<li style=""><a href="#" style="font-weight: bold; color:#424890; font-size: 18px;">Feedback</a></li>
										
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