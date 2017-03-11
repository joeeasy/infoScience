<?php
ob_start();
	session_start();
require_once('includes/connect.php');
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
        <title>Master Journal Search - Information Science</title>
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
			function openCity(evt, cityName) {
				// Declare all variables
				var i, tabcontent, tablinks;

				// Get all elements with class="tabcontent" and hide them
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}

				// Get all elements with class="tablinks" and remove the class "active"
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}

				// Show the current tab, and add an "active" class to the link that opened the tab
				document.getElementById(cityName).style.display = "block";
				evt.currentTarget.className += " active";
			}
		</script>
		<style>
			
			#settings{
				display: none;
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
			.mainmenu ul#nav li:hover> a,
			.mainmenu ul#nav li.current{
				background: #bebebe none repeat scroll 0 0;
			}
			
			
			
			 /* Style the list */
				ul.tab {
					list-style-type: none;
					margin: 0;
					padding: 0;
					overflow: hidden;
					border-bottom: 1px solid #ccc;
				}

				/* Float the list items side by side */
				ul.tab li {float: left;}

				/* Style the links inside the list items */
				ul.tab li a {
					display: inline-block;
					color: white;
					margin-right: 5px;
					background-color: grey;
					text-align: center;
					padding: 6px 8px;
					text-decoration: none;
					transition: 0.3s;
					font-size: 13px;
				}

				/* Change background color of links on hover */
				ul.tab li a:hover {background-color: #424890;}

				/* Create an active/current tablink class */
				ul.tab li a:focus, .active {background-color: #424890;
					
				}

				/* Style the tab content */
				.tabcontent {
					display: none;
					padding: 6px 12px;
					border: 1px solid #ccc;
					border-top: none;
				}
				.tabcontent ul li a {
					color: #424890;
				}
		</style>
    </head>
    <body class="home-2"  onload="openCity(event, 'London')">
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
       	
      
        <!--End Mobile Menu Area-->
        
        <!--Start Header area  -->
		<div id="wrapper" class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
        <div class="header_area">
            <div class="header_top_area" style="background-color: black;">
                <div class="container">
                    <div class="row">  
						<div class="col-md-4 col-lg-4 col-md-offset-7 col-lg-offset-7">
                            <div class="header_top_menu">
                                <ul>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Corporate Website</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="header_bottom_area" style="background-color: white;">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-5 col-lg-5">
                            <div class="logo" style="margin-top: 20px; padding-left: 10px;">
                                <a href="index.php"><h1 style="color: black;">Institute Of Science Information (ISI)</h1>
                                </a>
                            </div>
                        </div>
						<div  class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1" style="margin-top: 20px; margin-bottom: 10px;">
						<form action="journalSearch.html">
                           <div class="col-md-12 col-lg-12">
							   <input type="text" placeholder="Enter search term or article name" style="width: 250px; height: 40px; font-family: agency fb;border: 0px solid; border-bottom: 1px solid black; font-size: 20px;"/>
							   <button type="submit" style="background-color: white; width: 50px; border: 0px solid; height: 40px;padding: 0px;">
									<img src="img/icons/Capture.JPG" style="width: 65%; height: 75%;">
							   </button>
						   </div>
						   </form>
                        </div>
						
                    </div>
                </div>
            </div>
			<div class="mainmenu_area">
                <div>
                    <div>
                        <div>
                            <div class="mainmenu nav" style="background-color: white; border-top: 1px solid grey;">
								<nav>
									<ul id="nav">										
										<li><a href="#" style="color: black; margin-left: 20px; padding-bottom: 10px; padding-top: 10px; font-weight: bold; font-size: 15px;">Customer Care</a>
											<ul >
												<li><a href="">Tech Street</a></li>                                       
												<li><a href="">Thompson IP Management</a></li>
												<li><a href="">ScholarOne</a></li>
												<li><a href="">all other products</a></li>
											</ul>
										</li>
										<li style=""><a href="" style="color: black; padding-bottom: 10px; padding-top: 10px; font-weight: bold; font-size: 15px;">Training</a></li>
								                   
									</ul>
								</nav>
                            </div>							
                        </div>
                        
                    </div>
                </div>
            </div>
			<div class="mainmenu nav" style="background-color: white; border-top: 1px solid grey;">
								<nav>
									<ul id="nav">	
										<li style=""><a href="index.php" style="color: #424890; padding: 10px; font-weight: bold; font-size: 10px;">Home</a></li>
										<li style=""><a href="masterJournalSearch.php" style="color: grey; padding: 10px; font-weight: bold; font-size: 10px;">Master Journal List</a></li>
										<li style=""><a href="journalSearch.php" style="color: #424890; padding: 10px; font-weight: bold; font-size: 10px;">Journal Search</a></li>
										<li style=""><a href="submissionForm.php" style="color: #424890; padding: 10px; font-weight: bold; font-size: 10px;">Electronic Journal Submission Form</a></li>
								                   
									</ul>
								</nav>
                            </div>
            <!--End Mainmenu -->
        </div>
		
        <!--End Header Area-->
        <!--Start Slider Area  -->
       
        <!--End Slider Area-->
        <!--Start Promotions Area  -->
        <section class="promotions_area section_padding section_gray"  style="background-color: #fff; padding-left: 10px;">
            <div class="container">
                <div class="row">				
						
						<div class="col-md-10 col-lg-10" style="padding: 0px;">
						<h3 class="col-md-12 col-lg-12" style="color: black; padding: 0px;">Master Journal List</h3>
						<div class="col-md-12 col-lg-12" style="padding: 0px;">
                    <div class="col-md-2 col-lg-2" style="text-align: left;  padding: 0px;">
						<a href="" style="font-weight: bold; font-size:18px; color:#424890;">Submit a journal ></a></a>
					</div>
					
					<div class="col-md-7 col-lg-7">
                    	<div class="col-md-12 col-lg-12" style="">
						<form action="journalSearch.php" method="GET">
							<div class="col-md-12 col-lg-12"  style="font-size: 20px; color:#424890; padding-top: 20px; padding-bottom: 10px;">
								<b>SEARCH OUR MASTER JOURNAL LIST </b><br><input type="text" name="search"  style="width: 100%;">
							</div>
							<div class="col-md-12 col-lg-12" style=" padding-bottom: 10px;">
								Search type:<br>
								<select style="" value="1">
											<option selected>Title Word</option>
											<option>Full Journal Title</option>
											<option>ISSN</option>
										</select>
							</div>							
							<div class="col-md-12 col-lg-12" style="padding-bottom: 20px;">
								<input type="submit" value="Search" style="background-color: orange; color: white;">
							</div>
							</form>
						</div>
						<div class="col-md-12 col-lg-12" style="color: black; padding-top: 20px; margin-bottom: 100px;">
						 <ul class="tab">
						  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">JOURNAL LISTS</a></li>
						  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">JOURNAL EVALUATION</a></li>
						  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Tokyo')">SCOPE NOTES</a></li>
						</ul>

						<div id="London" class="tabcontent">
						 <br><H4>JOURNAL LISTS FOR SEARCHABLE DATABASES </H4>
								<UL>
								<LI><A class=more_link href="">Arts &amp; Humanities Citation Index®&nbsp;&nbsp;</A> &nbsp; &nbsp;(<EM>Web of Science</EM>) 
								<LI><A class=more_link href="">Biological Abstracts</A> 
								<LI><A class=more_link href="">BIOSIS PREVIEWS</A> 
								<LI><A class=more_link href="">Biological Abstracts/RRM</A>
								<LI><A class=more_link  href="">Current Contents® / Agriculture, Biology &amp; Environmental Sciences</A> 
								<LI><A class=more_link href="">Current Contents® / Arts &amp; Humanities</A> 
								<LI><A class=more_link href="">Current Contents® / Clinical Medicine</A> 
								<LI><A class=more_link href="">Current Contents® / Engineering, Computing &amp; Technology</A> 
								<LI><A class=more_link href="">Current Contents® / Life Sciences</A> 
								<LI><A class=more_link href="">Current Contents® / Physical, Chemical &amp; Earth Sciences</A> 
								<LI><A class=more_link href="">Current Contents® / Social &amp; Behavioral Sciences</A> 
								<LI><A class=more_link href="">Current Contents Collections / Business Collection</A> 
								<LI><A class=more_link href="">Current Contents Collections / Electronics &amp; Telecommunications Collection</A> 
								<LI><A class=more_link href="">Emerging Sources Citation Index</A>&nbsp; &nbsp;(<EM>Web of Science</EM>) 
								<LI><A class=more_link href="">Science Citation Index®</A> 
								<LI><A class=more_link href="">Science Citation Index Expanded™</A> &nbsp; &nbsp;(<EM>Web of Science</EM>)
								<LI><A class=more_link href="">Social Sciences Citation Index®</A> &nbsp; &nbsp;(<EM>Web of Science</EM>) 
								<LI><A class=more_link href="">Zoological Record</A> </LI></UL><BR>
								<H4>CHEMICAL INFORMATION PRODUCTS </H4>
								<UL>
								<LI><A class=more_link href="">ChemPrep™</A> 
								<LI><A class=more_link href="">ISI Chemistry Reaction Center<SPAN class=TM>SM</SPAN> <SPAN class=noborder>&nbsp; &nbsp; &nbsp;</SPAN></A> 
								<LI><A class=more_link href="">Current Chemical Reactions®</A> 
								<LI><A class=more_link href="">Current Chemical Reactions® Database</A> 
								<LI><A class=more_link href="">Index Chemicus®</A> 
								<LI><A class=more_link href="">Reaction Citation Index™</A> </LI></UL>
						</div>

						<div id="Paris" class="tabcontent">
						  <P>Do you wish to recommend or submit a print or electronic journal for selection or evaluation? </P>
								<UL>
								<LI><A class=more_link href="">Submit a journal for evaluation</A> 
								<LI><A class=more_link href="">Inquire about the status of an evaluation</A> </LI></UL>
						</div>

						<div id="Tokyo" class="tabcontent">
						  <UL>
								<LI><A href="">Arts &amp; Humanities Citation Index</A> 
								<LI><A href="">Current Contents Collection: Business</A> 
								<LI><A href="">Current Contents Collection: Electronic &amp; Telecommunications</A> 
								<LI><A href="">Current Contents/Agriculture, Biology &amp; Environmental Sciences</A> 
								<LI><A href="">Current Contents/Arts &amp; Humanities</A> 
								<LI><A href="">Current Contents/Clinical Medicine</A> 
								<LI><A href="">Current Contents/Engineering, Computing &amp; Technology</A> 
								<LI><A href="">Current Contents/Life Sciences</A> 
								<LI><A href="">Current Contents/Physical, Chemical &amp; Earth Sciences</A> 
								<LI><A href="">Current Contents/Social &amp; Behavioral Sciences</A> 
								<LI><A href="">Science Citation Index</A> 
								<LI><A href="">Science Citation Index Expanded</A> 
								<LI><A href="">Social Science Citation Index</A> </LI></UL>
						</div>
						
						
						
						
							
						</div>						
					</div>	
					<div class="col-md-3 col-lg-3" style="text-align: left;">
						 <p style="font-size: 18px; color: black; font-weight: bold;">
												  
													Source Publication Documents
												  
												</p>


												
												
									

								<UL style="list-style: none;">
								<LI><A href="" style="color: #424890;">Arts and Humanities Citation Index Source Publication</A> <br><img src="img/icons/Capture2.JPG"><br>
								<LI><A href="" style="color: #424890;">Science Citation Index Expanded Source Publication</A> <br><img src="img/icons/Capture2.JPG"><br>
								<LI><A href="" style="color: #424890;">Social Science Citation Index Source Publication</A><br><img src="img/icons/Capture2.JPG">
									</ul>			  
											
									
								  <p style="font-size: 18px; color: black; font-weight: bold;">
												  
													Web of Science Regional Content Expansion
												</p> 


									 <div class="callout">

								<P>The <A href="" style="color: #424890;">Master Journal List</A> includes all journal titles covered in Web of Science. </P>
								<P>Refer to the <A href="" style="color: #424890;">Journal Submission Process</A> if you wish to submit a print or electronic journal for evaluation. </P>
								<P>Our essay, <A href="" style="color: #424890;">The Thomson Scientific Database: The Journal Selection Process</A>, describes the selection process used. </P>
									 </div>




								<!-- Component -->






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
        <!--End Service Area-->
        <!--Our Process Area -->
        
        <!--Our Process Area-->
        <!--Our Great Team Area  -->
        
        <!--End Blog Area-->
        
        
        <!-- Footer Area  -->
        <footer class="footer_area">
            
            <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-md-5 col-lg-5">
                            <div class="footer_copyright">
                                <p>Copyright 2016 &copy; <a href ="DashboardWebOfScience/login.php">Institute Of Science Information (ISI) Dashboard</a> </p>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7">
                           <div class="footer_menu">
								<nav>
									<ul>
										<li><a href="#">Careers</a></li>
										<li><a href="#">Copyright</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Privacy Statement</a></li>
										<li><a href="#">Cookie Policy</a></li>
									</ul>
								</nav>
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