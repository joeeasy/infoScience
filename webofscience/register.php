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
        <title>Register- WEB OF SCIENCE</title>
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
			li{
				list-style: none;
			}
		/* The Modal (background) */
			.modal {
				display: none; /* Hidden by default */
				position: fixed; /* Stay in place */
				z-index: 1; /* Sit on top */
				left: 0;
				top: 0;
				height: 100%;
				width: 100%;
				overflow: auto; /* Enable scroll if needed */
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content/Box */
			.modal-content {
				background-color: white;				
				margin: 15% auto; /* 15% from the top and centered */
				margin-top: 100px;
				margin-bottom: 0%;
				padding-bottom: 15px;
				border: 2px solid #ecf0f5;
				border-radius: 3px;
				width: 60%;
				height: 400px;
				-webkit-animation-name: animatetop;
				-webkit-animation-duration: 0.8s;				
			}
			/* Add Animation */
				@-webkit-keyframes animatetop {
					from {margin-top: -300px; opacity: 0}
					to {margin-top: 100px; opacity: 1}
				}

			/* The Close Button */
			.close {
				color: red;
				float: right;
				font-family: arial;
				font-size: 38px;
				position: relative;
				right: 15px;
				font-weight: bold;
				top: -10px;
			}

			.close:hover,
			.close:focus {
				color: black;
				text-decoration: none;
				cursor: pointer;
			}
			#txt:focus{
				border: 2px solid #0099ff;
			}
			#txt{
				width: 100%; 
				height: 40px; 
				border-radius: 5px; 
				border: 1px solid grey;
			}
			.title{
				color: #424890;
				font-family: arial;
				font-size: 38px;
				position: relative;
				left: 15px;
				font-weight: bold;
			}
			#tbl{
				width: 80%;
				margin-left: 10%;
				margin-right: 10%;
				margin-top: 10px;
			}
			#tbl td{
				padding: 10px;
			}
			#tbl td label{
				font-size: 17px;
				color: black;
			}
		</style>
			
			
			
    </head>
<?php
require_once('../includes/connect.php');
if(isset($_POST['reg'])){
	
		$fname = trim($_POST['fname']);
		$fname = strip_tags($fname);
		$fname = htmlspecialchars($fname);
		
		$lname = trim($_POST['lname']);
		$lname = strip_tags($lname);
		$lname = htmlspecialchars($lname);
		
		$email = trim($_POST['email']);
		$email  = strip_tags($email );
		$email  = htmlspecialchars($email );
		
		$pwd = trim($_POST['pwd']);
		$pwd = strip_tags($pwd);
		$pwd = htmlspecialchars($pwd);
		
		$cpwd = trim($_POST['cpwd']);
		$cpwd = strip_tags($cpwd);
		$cpwd = htmlspecialchars($cpwd);
		
		$dtj = date("Y-m-d");
		
		// basic name validation
	
		if (empty($fname)) {
			
			$error[] = "Please enter firstname.";
		}
		if (empty($lname)) {
			
			$error[] = "Please enter lastname";
		}
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error[] = "Please enter valid email address.";
		} else {
			// check email exist or not
			$sql = "SELECT email FROM members WHERE email='$email'";
			$result = mysqli_query($con,$sql);
			$count = mysqli_num_rows($result);
			if($count!=0){
				
				$error[] = "Provided Email is already in use.";
			}
		}
		if (empty($pwd)) {
			
			$error[] = "Please enter your password.";
		}
		if ($pwd!=$cpwd) {
			
			$error[] = "password do not match.";
		}
		// password encrypt using SHA256();
		$password = hash('sha256', $pwd);
		
		if( !isset($error) ) {

			//insert into database with a prepared statement
			$sql="INSERT INTO members(fname,lname,email,pwd)
								values('$fname','$lname','$email','$password')";
			$result=mysqli_query($con,$sql);
			
			if ($result) {
				
				$msg = "Your Registration was Successfully <a href='login.php'>click here</a> to login";	
				
			} else {
				echo mysqli_error('$con');
				//$error[] = "Something went wrong, try again later...";	
			}
		} 


}

?>
    <body class="home-2">
	 <!-- The Modal -->
		<div id="myModal" class="modal">			
		  <!-- Modal content -->
		  <div class="modal-content">	  
			<div style="background-color: #ecf0f5; margin: 0px;padding-top: 10px; padding-bottom: 0px; width: 100%; height:auto; ">				
				<span onclick="spn()" class="close">x</span>
				<span class="title">Account Sign Up</span>				
			</div>
			
		  </div>

		</div>
       <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
       		
       
        <!--End Mobile Menu Area-->
       
        <!--Start Header area  -->
        <div class="header_area">
            <div class="header_top_area">
                <div class="container">
                    <div class="row"> 
						<div class="col-md-1 col-lg-1 col-md-offset-11 col-lg-offset-11">
                            <div class="header_top_menu">
                                <ul>
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
                                <a href="index.php"><h1 style="color: orange;">WEB OF SCIENCE</h1>
                                </a>
                            </div>
                        </div>
						<div class="col-md-3 col-lg-3 col-md-offset-4 col-lg-offset-4" style="margin-top: 20px; margin-bottom: 10px;">
                            <div class="logo">
                               <a href="#"><h2 style="color: white;">Institute Of Science Information (ISI)</h2>
                                </a>
								
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
        <section class="promotions_area section_padding"  style="background: white; border-bottom: 1px solid grey; margin-bottom: 0px; padding-bottom: 0px;padding-left: 30px;">
            <div class="container" style=" width: 100%;">
                <div class="row">				
						
                        <div class="page_title text-left">						
							<div class="col-md-12 col-lg-12" style="margin-top: 10px; margin-bottom: 50px; font-weight: bold; color: black;">
								<h2>Please Register to Access Web Of Science</h2>
							</div>
							
							<?php
										if(isset($error)){
					foreach($error as $error){
						?>
						<div class="form-group">
            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $error; ?>
                </div>
            	</div>
						
				<?php	} 
				}else if(isset($msg)){ ?>
					<div class='form-group'>
            	<div class="title">
				<span class='glyphicon glyphicon-info-sign' ></span> <?php echo $msg; ?>
                </div>
            	</div>
				<?php }?>
							
							<div class="col-md-12 col-lg-12" style="padding: 0px;">
								<div class="col-md-7 col-lg-7" style="padding-bottom: 50px;padding-top: 20px; padding-right: 150px;">
									<h4 style="font-weight: bold; color: black;">USER REGISTRATION</h4>
									
										<form name="F_add" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<table id="tbl">
						<tr>
							<td style="text-align: right; width: 30%;"><label class="sck">Firstname: </label></td>
							<td style=" width: 70%;"><input id="txt" type="text" name="fname" placeholder="Enter Firstname"></td>
						</tr>
						<tr>
							<td style="text-align: right;"><label class="sck">Lastname: </label></td>
							<td><input id="txt" type="text" name="lname" placeholder="Enter Lastname"></td>
						</tr>
						<tr>
							<td style="text-align: right;"><label class="sck">Email Address: </label></td>
							<td><input id="txt" type="text" name="email" placeholder="Enter Email Address"></td>
						</tr>
						<tr>
							<td style="text-align: right;"><label class="sck">Password: </label></td>
							<td><input id="txt" type="password" name="pwd" placeholder="Enter Password"></td>
						</tr>
						<tr>
							<td style="text-align: right;"><label class="sck">Confirm Password: </label></td>
							<td><input id="txt" type="password" name="cpwd" placeholder="Confirm Password"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="reg" style="width: 50%; font-weight: bold; font-size: 17px;" value="Sign Up"></td>
						</tr>
						
					</table>
				</form><br>
										
										
								</div>
								<div class="col-md-5 col-lg-5" style="background-color: #efefef; padding-top: 20px; padding-right: 30px; padding-left: 30px;">
									<p Style="font-weight: bold;">
										WEB OF SCIENCE
									</p>
									<p>
										Your ideal single research destination to explore the citation universe across subjects and around the world. Web of Science provides you access to the most reliable, integrated, multidisciplinary research connected through linked content citation metrics from multiple sources within a single interface. And since Web of Science adheres to a strict evaluation process, you can be assured only the most influential, relevant, and credible information is included - allowing you to uncover your next big idea faster.
									</p>
									<p>
										Web of Science connects the entire search and discover process through:
										<ul>
											<li>Premier Multidisciplinary Content</li>
											<li>Emerging Trends</li>
											<li>Subject Specific Content</li>
											<li>Regional Content</li>
											<li>Research Data</li>
											<li>Analysis Tools</li>
										</ul>
										<a href="" style="color:#424890;">Learn more about Web of Science</a>
									</p>
									<p Style="font-weight: bold;">
										NOT REGISTERED?
									</p>
									<p>
										Take advantage of many great features when you register.
										<ul>
											<li>Access Web of Science from outside your institution using roaming capabilities</li>
											<li>Use your Web of Science account to create a ResearcherID profile that showcases your publication history</li>
											<li>Set up citation alerts whereby you are notified by email when an article on your Alerts list has been cited</li>
											
										</ul>
										<a href="" style="color:#424890;">Learn more about the benefits of registering for an account</a>
									</p>
								</div>
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
            
            <div class="footer_bottom_area" style="background: white none repeat scroll 0 0; border-top: 3px solid #efefef;">
                <div class="" >
                    <div class="row" style="">
                        <div class="col-md-12 col-lg-12" style="">
                          <div class="footer_menu">
								<nav>
									<ul style="text-align: left;">
										<li style="margin-left: 20px;">&copy 2017</li>
										<li style="margin-right: 30px; margin-left: 20px;"><a href="#" style="font-weight: bold; color:#424890; font-size: 15px;">Institute Of Science Information (ISI)</a></li>
										<li style="margin-right: 30px;"><a href="#" style="font-weight: bold; color:#424890; font-size: 15px;">Terms of Use</a></li>
										<li style="margin-right: 30px;"><a href="#" style="font-weight: bold; color:#424890; font-size: 15px;">Privacy Policy</a></li>
										<li style=""><a href="#" style="font-weight: bold; color:#424890; font-size: 15px;">Feedback</a></li>
										
									</ul>
								</nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer Area-->
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