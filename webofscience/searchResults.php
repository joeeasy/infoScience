<?php
ob_start();
	session_start();
require_once('../includes/connect.php');
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
			function hidee(){
				var div = document.getElementById('settings5');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			
			
			function hidea(){
				var div = document.getElementById('settings10');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hideb(){
				var div = document.getElementById('settings19');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidec(){
				var div = document.getElementById('settings11');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hided(){
				var div = document.getElementById('settings1');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			
			function hidef(){
				var div = document.getElementById('settings12');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hideg(){
				var div = document.getElementById('settings2');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hideh(){
				var div = document.getElementById('settings13');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidei(){
				var div = document.getElementById('settings3');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidej(){
				var div = document.getElementById('settings14');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidek(){
				var div = document.getElementById('settings4');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidel(){
				var div = document.getElementById('settings15');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidem(){
				var div = document.getElementById('settings6');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hiden(){
				var div = document.getElementById('settings16');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hideo(){
				var div = document.getElementById('settings7');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hidep(){
				var div = document.getElementById('settings17');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hideq(){
				var div = document.getElementById('settings8');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hider(){
				var div = document.getElementById('settings18');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function hides(){
				var div = document.getElementById('settings9');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak(){
				var div = document.getElementById('fke');
				if(div.style.display == "none"){
					div.style.display = "block";
					return;
				}
					div.style.display = "none";
			}
			function freak1(){
				var div = document.getElementById('fke1');
				if(div.style.display == "none"){
					div.style.display = "block";
					return;
				}
					div.style.display = "none";
			}
			function freak2(){
				var div = document.getElementById('fke2');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak3(){
				var div = document.getElementById('fke3');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak4(){
				var div = document.getElementById('fke4');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak5(){
				var div = document.getElementById('fke5');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak6(){
				var div = document.getElementById('fke6');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak7(){
				var div = document.getElementById('fke7');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak8(){
				var div = document.getElementById('fke8');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak9(){
				var div = document.getElementById('fke9');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak10(){
				var div = document.getElementById('fke10');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak11(){
				var div = document.getElementById('fke11');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak12(){
				var div = document.getElementById('fke12');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak13(){
				var div = document.getElementById('fke13');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function freak14(){
				var div = document.getElementById('fke14');
				if(div.style.display == "block"){
					div.style.display = "none";
					return;
				}
					div.style.display = "block";
			}
			function para(){
				var div = document.getElementById('parahd');
				var par = document.getElementById('fool');				
					par.style.display = "none";
					div.style.display = "block";
			}
			function paraB(){
				var div = document.getElementById('parahd');
				var par = document.getElementById('fool');
					par.style.display = "block";
					div.style.display = "none";
			}
			
		</script>
		<style>
			#settings{
				display: none;
			}
			#settings5{
				display: none;
				z-index: 1;
			}
			#parahd{
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
			#fke{
				display: block;
			}
			#fke1{
				display: block;
			}
			#fke2{
				display: none;
			}
			#fke3{
				display: none;
			}
			#fke4{
				display: none;
			}
			#fke5{
				display: none;
			}
			#fke6{
				display: none;
			}
			#fke7{
				display: none;
			}
			#fke8{
				display: none;
			}
			#fke9{
				display: none;
			}
			#fke10{
				display: none;
			}
			#fke11{
				display: none;
			}
			#fke12{
				display: none;
			}
			#fke13{
				display: none;
			}
			#fke14{
				display: none;
			}
			#settings19{
				display: none;
			}
			#settings6{
				display: none;
			}
			#settings7{
				display: none;
			}
			#settings8{
				display: none;
			}			
			#settings9{
				display: none;
			}
			
			#settings10{
				display: none;
				z-index: 1;
			}
			#settings11{
				display: none;
				z-index: 1;
			}
			#settings12{
				display: none;
				z-index: 1;
			}
			#settings13{
				display: none;
				z-index: 1;
			}
			#settings14{
				display: none;
				z-index: 1;
			}
			#settings15{
				display: none;
				z-index: 1;
			}
			#settings16{
				display: none;
				z-index: 1;
			}
			#settings17{
				display: none;
				z-index: 1;
			}
			#settings18{
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
                                   <li><a href="login.php">Sign Out</a></li>
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
                                <a href="home.php"><h1 style="color: orange;">WEB OF SCIENCE</h1>
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
										<li class="current" style="padding-left: 20px; padding-right: 20px;"><a href="home.php" style="font-weight: bold; font-size: 15px;">Back To Search</a></li>
										
										
                               
										                      
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
        <section class="promotions_area section_padding section_gray"  style=" padding-top: 0px; border-bottom: 1px solid grey; margin-bottom: 0px; padding-bottom: 0px;">
            <div class="container" style=" width: 100%;">
                <div class="row">
				
				
       <div class="col-md-3 col-lg-3" style="margin-top: 0px; padding: 0px;">
						<div class="col-md-12 col-lg-12" style="padding: 20px;">
							<h4 style="font-weight: bold; color: black;">Results: </h4>
							<p><span style="font-weight: bold;">You searched for:<br>TOPIC:</span><span style="font-style: italic;"> (oil spill)</span><a href="#" onclick="para()" id="fool" style="color:#424890;"> ...More</a></p>
							<p style="padding-left: 5px;" id="parahd">Extra information found here for user availability<br><a href="#" onclick="paraB()" style="color:#424890;"> ...Less</a></p>
							<p style="padding-left: 5px; font-weight: bold; color: #424890;"><img src="img/bell-xxl.png" style="margin-right: 10px; height: 20px; width: 20px;">Create Alert</p>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; padding: 0px;">
							<div class="col-md-12 col-lg-12" style="border-top: 2px solid grey; border-bottom: 1px solid grey; border-left: 2px solid orange; padding: 20px;">
								<h4 style="font-weight: bold; color: black;">Refine Results</h4>
							</div>
							<div class="col-md-12 col-lg-12" style="padding: 20px; border-bottom: 1px solid grey; padding-right: 0px; text-align: right;">
								<input type="text" placeholder="Search within results for..." style="width: 170px; height: 25px;border: 1px solid grey; border-radius: 5px;">
								<button type="submit" style="height: 40px; width: 50px; border-radius: 5px; background-color:#424890; padding: 0px;">
									<img src="img/rTLn8RLBc.png" style="transform: rotate(90deg); height: 60%; width: 60%;">
								</button>
							</div>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Web of Science Categories<img src="img/icon-arrow-right-b-128.png" onclick="freak()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Document Types<img src="img/icon-arrow-right-b-128.png" onclick="freak1()" style="cursor: pointer;  float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke1">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Research Areas<img src="img/icon-arrow-right-b-128.png" onclick="freak2()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke2">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Authors<img src="img/icon-arrow-right-b-128.png" onclick="freak3()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke3">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Group Authors<img src="img/icon-arrow-right-b-128.png" onclick="freak4()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke4">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Editors<img src="img/icon-arrow-right-b-128.png" onclick="freak5()" style="cursor: pointer;  float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke5">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Source Titles<img src="img/icon-arrow-right-b-128.png" onclick="freak6()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke6">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Book Series Titles<img src="img/icon-arrow-right-b-128.png" onclick="freak7()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke7">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Conference Titles<img src="img/icon-arrow-right-b-128.png" onclick="freak8()" style="cursor: pointer;  float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke8">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Publication Years<img src="img/icon-arrow-right-b-128.png" onclick="freak9()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke9">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Organizations Enhanced<img src="img/icon-arrow-right-b-128.png" onclick="freak10()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke10">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Funding Agencies<img src="img/icon-arrow-right-b-128.png" onclick="freak11()" style="cursor: pointer; float: right; margin-right: 10px;height: 20px; width: 20px;"></p>
							<section id="fke11">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Languages<img src="img/icon-arrow-right-b-128.png" onclick="freak12()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke12">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Countries/Territories<img src="img/icon-arrow-right-b-128.png" onclick="freak13()" style="cursor: pointer;  float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke13">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						<div class="col-md-12 col-lg-12" style="background-color: #efefef; border-bottom: 1px solid grey; padding: 20px; padding-right: 0px; padding-bottom: 0px;">
							<p style="font-weight: bold; color: black;">Open Access<img src="img/icon-arrow-right-b-128.png" onclick="freak14()" style="cursor: pointer; float: right; margin-right: 10px; height: 20px; width: 20px;"></p>
							<section id="fke14">
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br>
							<input type="checkbox" name="check1" value="" style="margin-right: 10px;">option<br><br>
							
							<a href="" style=" font-weight: bold; color: #424890;">more options/values...</a><br>
							<input type="submit" value="Refine" style="float: right; color: #424890; font-weight: bold; padding-left: 10px; padding-right: 10px;">
							</section>
						</div>
						
					
					</div>
					<div class="col-md-9 col-lg-9" style="border-left: 1px solid grey; margin-top: 0px; padding: 0px;">
						<div class="col-md-12 col-lg-12" style="border-bottom: 1px solid grey; padding-top: 20px; padding-bottom: 20px; background-color: #dedede;">
							<div class="col-md-6 col-lg-6" style="">Sort By: <select style="height: 30px; margin-right: 10px;" value="1">
								<option selected>Times Cited - highest to lowest</option>
								
							</select>
							</div>
							<div class="col-md-4 col-lg-4 col-md-offset-2 col-lg-offset-2" style="padding-top: 5px;">
								<a href=""><img src="img/icon-arrow-right-b-128.png" style="transform: rotate(90deg); margin-right: 10px; height: 20px; width: 20px;"></a> Page <input type="text" style="height: 20px; width: 40px; margin-right: 10px; border-radius: 5px; border: 1px solid #c8c8ca;" value="1"/> of 4 <a href=""><img src="img/icon-arrow-right-b-128.png" style="transform: rotate(-90deg); margin-left: 10px; height: 20px; width: 20px;"></a>
							</div>
						</div>
						<div class="col-md-12 col-lg-12" style="padding: 0px;">
							<div class="col-md-12 col-lg-12" style="">
								<div class="col-md-9 col-lg-9" style="margin-bottom: 10px; padding-top: 10px;padding-bottom: 10px;padding-right: 0px;">
									<div  class="col-md-3 col-lg-3" style="padding-left: 0px;">
										<input type="checkbox" name="check1" value="" style="margin-right: 10px;">Select Page
									</div>
								
									<div class="col-md-6 col-lg-6" style="padding-left: 0px; padding-right: 0px;">
										<select style="font-size: 10px;" value="1">
											<option selected>Save To EndNote online</option>
											
										</select>
										<input type="button" value="Add to Marked List" style="font-size: 10px;font-weight: bold;">
									</div>
								</div>								
							</div>
							
							<?php
						
				$search= trim($_GET['search']);
				$search = strip_tags($search);
				$search = htmlspecialchars($search);
		
						global $con;
						$sql = " SELECT * FROM journal WHERE keyword LIKE '%$search%'";
							$query = mysqli_query($con, $sql)
							or die("Error: ".mysqli_error($con));
							
						if($search == ""){
							echo "<br><center><h2>NO RECORD FOUND</h2></center>";
							exit;
							
						}else
								$i = 0;
								while($row=mysqli_fetch_array($query)){
									
										$jid=$row['journal_id'];
										$name=$row['name'];
										
								$i++;
								
						
					
								?>
							
							
							
							
							
							
							<div class="col-md-12 col-lg-12" style="">
								
								<div class="col-md-9 col-lg-9" style="padding-top: 10px;padding-bottom: 10px;">
									<div class="col-md-2 col-lg-2" style="">
										<input type="checkbox" name="check1" value="" style="margin-right: 5px;"><?php echo  $i; ?>
									</div>
									<div class="col-md-10 col-lg-10" style="">
										<p><a href="viewTopic.php?viewtopic=<?php echo $row['journal_id']; ?>" style="font-weight: bold; color: #424890;"><?php echo $row['name']; ?></a></p>
										<p>By <?php echo $row['aurthor_name']; ?><br>
										<?php echo $row['title']; ?></p>
										<input type="button" onclick="hider()" value="Full Text" style="font-weight: bold; color:#424890;">
										<input type="button" onclick="hides()" value="View Abstract" style="font-weight: bold; color:#424890;">
									</div>
									<div id="settings9" class="col-md-10 col-lg-10 col-md-offset-2 col-lg-offset-2 " style="">
										<p><br>
											<?php echo $row['abstract']; ?>
										</p>
									</div>
									<div id="settings18" class="border: 1px solid grey; box-shadow: 3px 2px 6px grey;section_gray" style="position: absolute; left: 100px; padding: 10px;top: 160px;width: 150px;">
										<input type="button" value="s-f-x" style="font-weight: bold; font-style: italic; margin-left: 20px; margin-bottom: 10px;">
										<input type="button" value="At Publishers Site" style=" margin-bottom: 10px;">
										<p style="font-weight: bold;">Library Holdings</p>
										<p><a href="" style="font-weight: bold; color: #424890;">Holdings</a></p>
										<p><a href="" style="font-weight: bold; color: #424890;">Holdings</a></p>
										<p><a href="" style="font-weight: bold; color: #424890;">Holdings</a></p>
										<p><a href="" style="font-weight: bold; color: #424890;">Holdings</a></p>
										<p><a href="" style="font-weight: bold; color: #424890;">Holdings</a></p>
									</div>
								</div>
								<div class="col-md-3 col-lg-3" style="margin-top: 10px; padding: 0px;">
									<p><span style="font-weight: bold">Times Cited: 0</span><br>
									<span style="font-style: italic;">(from Web of Science<br> Core Collection)</span></p>
								</div>
									
							</div>
							
								<?php }?>
							<div class="col-md-12 col-lg-12" style="padding-top: 20px; padding-bottom: 20px; background-color: #dedede;">
							<div class="col-md-8 col-lg-8" style="">Sort By: <select style="height: 30px; margin-right: 10px;" value="1">
								<option selected>Times Cited - highest to lowest</option>
								<option>Option 2</option>
							</select>
							Show: <select style="height: 30px;" value="1">
								<option selected>10 per page</option>
								<option>Option 2</option>
							</select>
							</div>
							<div class="col-md-4 col-lg-4" style="padding-top: 5px;">
								<a href=""><img src="img/icon-arrow-right-b-128.png" style="transform: rotate(90deg); margin-right: 10px; height: 20px; width: 20px;"></a> Page <input type="text" style="height: 20px; width: 40px; margin-right: 10px; border-radius: 5px; border: 1px solid #c8c8ca;" value="1"/> of 4 <a href=""><img src="img/icon-arrow-right-b-128.png" style="transform: rotate(-90deg); margin-left: 10px; height: 20px; width: 20px;"></a>
							</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<p style="font-style: italic;">8,655 records matched your query of 55,944,029 in the data limits you selected.<br> key- Structure available.</p>
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
            
            <div class="footer_bottom_area" >
                <div class="" >
                    <div class="row" style="">
                        <div class="col-md-12 col-lg-12" style="">
                           <div class="col-md-9 col-lg-9" style="">
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