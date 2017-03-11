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
        <title>Electronic Journal Submission Form - Information Science</title>
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
		
        <!--Start Mobile Menu Area-->
             
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
										<li style=""><a href="masterJournalSearch.php" style="color: #424890; padding: 10px; font-weight: bold; font-size: 10px;">Master Journal List</a></li>
										<li style=""><a href="journalSearch.php" style="color: #424890; padding: 10px; font-weight: bold; font-size: 10px;">Journal Search</a></li>
										<li style=""><a href="submissionForm.php" style="color: grey; padding: 10px; font-weight: bold; font-size: 10px;">Electronic Journal Submission Form</a></li>
								                   
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
							<h3 class="col-md-12 col-lg-12" style="color: black; padding: 0px;">ELECTRONIC JOURNAL SUBMISSION FORM</h3>
							<div class="col-md-12 col-lg-12" style="padding: 0px;">
						
								<div class="col-md-7 col-lg-7 col-md-offset-2 col-lg-offset-2">
									<div class="col-md-12 col-lg-12" style="">
										<p>This form is for the submission of electronic journals <b>ONLY</b>. </p>
										<p>Please read our <a href="" style="color:#424890;">Journal Selection Essay</a> for a description of the evaluation process. </p>
										<p>Before submitting your journal to Thomson Reuters for evaluation, please check the <a href="masterJournalSearch.php" style="color:#424890;">Master Journal List</a> to see if the journal is already covered in a Thomson Reuters product. </p>
										<p>
											<b>Important Note:</b> 
											<ul style="list-style: square;">
												<li>Journals submitted with incomplete access information will not be evaluated. </li>
												<li>Evaluation of a title <b>does not</b> guarantee its selection for our products.</li>
												<li>Journal content must be available in PDF format with no securities. </li>
											</ul>
											If you have any questions, please e-mail our Publisher Relations department. <br><br>
										</p>
										<h4>JOURNAL SUBMISSION FORM</h4>
										<p><i><span style="color: red;">*</span>Indicates required field</i></p>
										
										<form action="submissionForm.php" method="POST" style="margin-top: 50px;">
											<fieldset>
												<legend><h5>JOURNAL DETAILS</h5></legend>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Title<span style="color: red;"> *</span><br><input type="text" name="title" style="width: 50%;">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												URL<span style="color: red;"> *</span><br><input type="text" name="url" style="width: 50%;">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Editor-in-Chief<span style="color: red;"> *</span><br><input type="text" name="editor" style="width: 50%;">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Publisher Address<span style="color: red;"> *</span><br><input type="text" name="pubaddress" style="width: 50%;">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">												
												Country of origin<span style="color: red;"> *</span><br>
												<select name="country" size="1" style="width: 50%;">
													<option selected>-Select Country</option>
													<OPTION value="">-----------------------------------</OPTION> <OPTION value=USA>United States</OPTION> <OPTION value="UNITED KINGDOM">United Kingdom</OPTION> <OPTION value="">-----------------------------------</OPTION> <OPTION value=AFGHANISTAN>Afghanistan</OPTION> <OPTION value=ALBANIA>Albania</OPTION> <OPTION value=ALGERIA>Algeria</OPTION> <OPTION value="AM SAMOA">American Samoa</OPTION> <OPTION value=ANDORRA>Andorra</OPTION> <OPTION value=ANGOLA>Angola</OPTION> <OPTION value="ANTIGUA AND BARBUDA">Antigua and Barbuda</OPTION> <OPTION value=ARGENTINA>Argentina</OPTION> <OPTION value=ARMENIA>Armenia</OPTION> <OPTION value=ARUBA>Aruba</OPTION> <OPTION value=AUSTRALIA>Australia</OPTION> <OPTION value=AUSTRIA>Austria</OPTION> <OPTION value=AZERBAIJAN>Azerbaijan</OPTION> <OPTION value=BAHAMAS>Bahamas</OPTION> <OPTION value=BAHRAIN>Bahrain</OPTION> <OPTION value=BANGLADESH>Bangladesh</OPTION> <OPTION value=BARBADOS>Barbados</OPTION> <OPTION value=BELARUS>Belarus</OPTION> <OPTION value=BELGIUM>Belgium</OPTION> <OPTION value=BELIZE>Belize</OPTION> <OPTION value=BENIN>Benin</OPTION> <OPTION value=BERMUDA>Bermuda</OPTION> <OPTION value=BHUTAN>Bhutan</OPTION> <OPTION value=BOLIVIA>Bolivia</OPTION> <OPTION value=BOSNIA>Bosnia</OPTION> <OPTION value=BOTSWANA>Botswana</OPTION> <OPTION value=BRAZIL>Brazil</OPTION> <OPTION value="BRITISH VIRGIN ISLANDS">British Virgin Islands</OPTION> <OPTION value=BRUNEI>Brunei</OPTION> <OPTION value=BULGARIA>Bulgaria</OPTION> <OPTION value=BURKFASO>Burkfaso</OPTION> <OPTION value=BURMA>Burma</OPTION> <OPTION value=BURUNDI>Burundi</OPTION> <OPTION value=CAMBODIA>Cambodia</OPTION> <OPTION value=CAMEROON>Cameroon</OPTION> <OPTION value=CANADA>Canada</OPTION> <OPTION value="CAYMAN ISLANDS">Cayman Islands</OPTION> <OPTION value="CENTRAL AFRICAN REPUBLIC">Central African Republic</OPTION> <OPTION value=CHAD>Chad</OPTION> <OPTION value=CHILE>Chile</OPTION> <OPTION value=COLOMBIA>Colombia</OPTION> <OPTION value=COMOROS>Comoros</OPTION> <OPTION value="COSTA RICA">Costa Rica</OPTION> <OPTION value=CROATIA>Croatia</OPTION> <OPTION value=CUBA>Cuba</OPTION> <OPTION value=CYPRUS>Cyprus</OPTION> <OPTION value=CZECHREP>Czech Republic</OPTION> <OPTION value=DENMARK>Denmark</OPTION> <OPTION value=DJIBOUTI>Djibouti</OPTION> <OPTION value=DOMINICA>Dominica</OPTION> <OPTION value="DOMINICAN REPUBLIC">Dominican Republic</OPTION> <OPTION value=ECUADOR>Ecuador</OPTION> <OPTION value=EGYPT>Egypt</OPTION> <OPTION value="EL SALVADOR">El Salvador</OPTION> <OPTION value="EQUATORIAL GUINEA">Equatorial Guinea</OPTION> <OPTION value=ERITREA>Eritrea</OPTION> <OPTION value=ESTONIA>Estonia</OPTION> <OPTION value=ETHIOPIA>Ethiopia</OPTION> <OPTION value="FALKLAND ISLANDS">Falkland Islands</OPTION> <OPTION value=FIJI>Fiji</OPTION> <OPTION value=FINLAND>Finland</OPTION> <OPTION value="FRENCH GUIANA">French Guiana</OPTION> <OPTION value=FRANCE>France</OPTION> <OPTION value="FRENCH POLYNESIA">French Polynesia</OPTION> <OPTION value=GABON>Gabon</OPTION> <OPTION value=GAMBIA>Gambia</OPTION> <OPTION value=GEORGIA>Georgia</OPTION> <OPTION value=GERMANY>Germany</OPTION> <OPTION value=GHANA>Ghana</OPTION> <OPTION value=GIBRALTAR>Gibraltar</OPTION> <OPTION value=GREECE>Greece</OPTION> <OPTION value=GREENLAND>Greenland</OPTION> <OPTION value=GRENADA>Grenada</OPTION> <OPTION value=GUADELOUPE>Guadeloupe</OPTION> <OPTION value=GUATEMALA>Guatemala</OPTION> <OPTION value=GUINEA>Guinea</OPTION> <OPTION value=GUYANA>Guyana</OPTION> <OPTION value=HAITI>Haiti</OPTION> <OPTION value=HERZEGOVINA>Herzegovina</OPTION> <OPTION value="HOLY SEE">Holy See</OPTION> <OPTION value=HONDURAS>Honduras</OPTION> <OPTION value="HONG KONG">Hong Kong</OPTION> <OPTION value=HUNGARY>Hungary</OPTION> <OPTION value=ICELAND>Iceland</OPTION> <OPTION value=INDIA>India</OPTION> <OPTION value=INDONESIA>Indonesia</OPTION> <OPTION value=IRAN>Iran</OPTION> <OPTION value=IRAQ>Iraq</OPTION> <OPTION value=EIRE>Ireland</OPTION> <OPTION value=ISRAEL>Israel</OPTION> <OPTION value=ITALY>Italy</OPTION> <OPTION value="IVORY COAST">Ivory Coast</OPTION> <OPTION value=JAMAICA>Jamaica</OPTION> <OPTION value=JAPAN>Japan</OPTION> <OPTION value=JORDAN>Jordan</OPTION> <OPTION value=KAMPUCHEA>Kampuchea</OPTION> <OPTION value=KAZAKHSTAN>Kazakhstan</OPTION> <OPTION value=KENYA>Kenya</OPTION> <OPTION value=KIRGHIZSTAN>Kirghizstan</OPTION> <OPTION value=KIRIBATI>Kiribati</OPTION> <OPTION value=KUWAIT>Kuwait</OPTION> <OPTION value=LAOS>Laos</OPTION> <OPTION value=LATVIA>Latvia</OPTION> <OPTION value=LEBANON>Lebanon</OPTION> <OPTION value=LESOTHO>Lesotho</OPTION> <OPTION value=LIBERIA>Liberia</OPTION> <OPTION value=LIBYA>Libya</OPTION> <OPTION value=LIECHTENSTEIN>Liechtenstein</OPTION> <OPTION value=LITHUANIA>Lithuania</OPTION> <OPTION value=LUXEMBORG>Luxemborg</OPTION> <OPTION value=MACEDONIA>Macedonia</OPTION> <OPTION value=MADAGASCAR>Madagascar</OPTION> <OPTION value=MALAWI>Malawi</OPTION> <OPTION value=MALAYSIA>Malaysia</OPTION> <OPTION value=MALDIVES>Maldives</OPTION> <OPTION value=MALI>Mali</OPTION> <OPTION value=MALTA>Malta</OPTION> <OPTION value="MARSHALL ISLANDS">Marshall Islands</OPTION> <OPTION value=MARTINIQUE>Martinique</OPTION> <OPTION value=MAURITANIA>Mauritania</OPTION> <OPTION value=MAURITIUS>Mauritius</OPTION> <OPTION value=MEXICO>Mexico</OPTION> <OPTION value=MICRONESIA>Micronesia</OPTION> <OPTION value=MOLDAVIA>Moldavia</OPTION> <OPTION value=MONACO>Monaco</OPTION> <OPTION value=MONGOLIA>Mongolia</OPTION> <OPTION value=MONTENEGRO>Montenegro</OPTION> <OPTION value=MORROCO>Morroco</OPTION> <OPTION value=MOZAMBIQUE>Mozambique</OPTION> <OPTION value=MYANMAR>Myanmar</OPTION> <OPTION value=NAMIBIA>Namibia</OPTION> <OPTION value=NAURU>Nauru</OPTION> <OPTION value=NEPAL>Nepal</OPTION> <OPTION value="NETHER ANTILLES">Nether Antilles</OPTION> <OPTION value="NEW CALEDONIA">New Caledonia</OPTION> <OPTION value="NEW ZEALAND">New Zealand</OPTION> <OPTION value=NICARAGUA>Nicaragua</OPTION> <OPTION value=NIGER>Niger</OPTION> <OPTION value=NIGERIA>Nigeria</OPTION> <OPTION value=NORWAY>Norway</OPTION> <OPTION value=OMAN>Oman</OPTION> <OPTION value=P.R.CHINA>P.R. China</OPTION> <OPTION value=PAKISTAN>Pakistan</OPTION> <OPTION value=PALAU>Palau</OPTION> <OPTION value=PANAMA>Panama</OPTION> <OPTION value="PAPUA NEW GUINEA">Papua New Guinea</OPTION> <OPTION value=PARAGUAY>Paraguay</OPTION> <OPTION value=PERU>Peru</OPTION> <OPTION value=PHILIPPINES>Philippines</OPTION> <OPTION value=POLAND>Poland</OPTION> <OPTION value=PORTUGAL>Portugal</OPTION> <OPTION value=QATAR>Qatar</OPTION> <OPTION value="REP CONGO">Rep. Congo</OPTION> <OPTION value=REUNION>Reunion</OPTION> <OPTION value=ROMANIA>Romania</OPTION> <OPTION value=RUSSIA>Russia</OPTION> <OPTION value=RWANDA>Rwanda</OPTION> <OPTION value="ST LUCIA">St. Lucia</OPTION> <OPTION value=SAMOA>Samoa</OPTION> <OPTION value="SAN MARINO">San Marino</OPTION> <OPTION value="SAO TOME AND PRINCIPE">Sao Tome and Principe</OPTION> <OPTION value="SAUDI ARABIA">Saudi Arabia</OPTION> <OPTION value=SENEGAL>Senegal</OPTION> <OPTION value=SERBIA>Serbia</OPTION> <OPTION value=SEYCHELLES>Seychelles</OPTION> <OPTION value="SIERRA LEONE">Sierra Leone</OPTION> <OPTION value=SINGAPORE>Singapore</OPTION> <OPTION value=SLOVAKIA>Slovakia</OPTION> <OPTION value=SLOVENIA>Slovenia</OPTION> <OPTION value="SOLOMON ISLANDS">Solomon Islands</OPTION> <OPTION value=SOMOLIA>Somolia</OPTION> <OPTION value="SOUTH AFRICA">South Africa</OPTION> <OPTION value="SOUTH KOREA">South Korea</OPTION> <OPTION value=SPAIN>Spain</OPTION> <OPTION value="SRI LANKA">Sri Lanka</OPTION> <OPTION value="ST KITTS">St. Kitts</OPTION> <OPTION value="ST VINCENT ISLANDS">St. Vincent Islands</OPTION> <OPTION value=SUDAN>Sudan</OPTION> <OPTION value=SURINAME>Suriname</OPTION> <OPTION value=SWAZILAND>Swaziland</OPTION> <OPTION value=SWEDEN>Sweden</OPTION> <OPTION value=SWITZERLAND>Switzerland</OPTION> <OPTION value=SYRIA>Syria</OPTION> <OPTION value=TAIWAN>Taiwan</OPTION> <OPTION value=TAJIKISTAN>Tajikistan</OPTION> <OPTION value=TANZANIA>Tanzania</OPTION> <OPTION value=THAILAND>Thailand</OPTION> <OPTION value="THE NETHERLANDS">The Netherlands</OPTION> <OPTION value=TOGO>Togo</OPTION> <OPTION value=TONGA>Tonga</OPTION> <OPTION value=TRINIDAD>Trinidad</OPTION> <OPTION value=TUNISIA>Tunisia</OPTION> <OPTION value=TURKEY>Turkey</OPTION> <OPTION value=TURKMEN>Turkmen</OPTION> <OPTION value=TUVALU>Tuvalu</OPTION> <OPTION value=UGANDA>Uganda</OPTION> <OPTION value=UKRAINE>Ukraine</OPTION> <OPTION value="UNITED ARAB EMIRATES">United Arab Emirates</OPTION> <OPTION value="UNITED KINGDOM">United Kindgom</OPTION> <OPTION value=URUGUAY>Uruguay</OPTION> <OPTION value=USA>United States</OPTION> <OPTION value=UZBEKISTAN>Uzbekistan</OPTION> <OPTION value=VANUATU>Vanuatu</OPTION> <OPTION value=VENEZUELA>Venezuela</OPTION> <OPTION value=VIETNAM>Vietnam</OPTION> <OPTION value="WEST SAMOA">West Samoa</OPTION> <OPTION value=YEMEN>Yemen</OPTION> <OPTION value=YUGOSLAVIA>Yugoslavia</OPTION> <OPTION value="ZAIRE DEMREP CONGO">Zaire Dem. Rep. Congo</OPTION> <OPTION value=ZAMBIA>Zambia</OPTION> <OPTION value=ZIMBABWE>Zimbabwe</OPTION>
												</select>
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">												
												e-ISSN<span style="color: red;"> * </span>(ex. 1234-5678) For more information, visit <a href="" style="color:#424890;">ISSN Portal</a>.<br><input  style="width: 50%;" type="text" name="eissn">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Print ISSN<span style="color: red;"> * </span>(If no print ISSN, please repeat e-ISSN)<br><input  style="width: 50%;" type="text" name="printissn">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Publishing Company<span style="color: red;"> *</span><br><input  style="width: 50%;" type="text" name="pubcompany">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												1st Year of Publication<span style="color: red;"> *</span><br><input  style="width: 50%;" type="text" name="yrpub">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Freq (# of Issues per Year)<span style="color: red;"> *</span><br><input  style="width: 50%;" type="text" name="issueperyr">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Most Recent Issue (Vol, Iss, Yr)<span style="color: red;"> *</span><br><input  style="width: 50%;" type="text" name="rissue">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Thomson Reuters requests access to the full text of the journal using an institutional subscription. Please provide a username and password with which we may access the journal. Please do not provide us your personal login information. If the journal is Open Access, please enter “Open Access” below.<br><textarea style="width: 90%;" name="pdetails"></textarea>
												</div>
												<div style="padding: 0px; margin-bottom: 30px;" class="col-md-12 col-lg-12">												
												Subject Area<span style="color: red;"> *</span><br>
												<select name="subarea" size="1" style="width: 50%;">
													<option selected>-Select Subject Area</option>
													<OPTION value="Agriculture, Biology &amp; Environmental Science">Agriculture, Biology &amp; Environmental Science</OPTION> <OPTION value="Arts &amp; Humanities">Arts &amp; Humanities</OPTION> <OPTION value="Clinical Medicine">Clinical Medicine</OPTION> <OPTION value="Engineering, Computing &amp; Technology">Engineering, Computing &amp; Technology</OPTION> <OPTION value="Life Sciences">Life Sciences</OPTION> <OPTION value="Physical, Chemical &amp; Earth Sciences">Physical, Chemical &amp; Earth Sciences</OPTION> <OPTION value="Social and Behavioral Sciences">Social and Behavioral Sciences</OPTION>
												</select>
												</div>
											</fieldset>	
											<fieldset>
												<legend><h5>YOUR CONTACT DETAILS</h5></legend>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Name<span style="color: red;"> *</span><br><input  style="width: 50%;" type="text" name="pname">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Address<span style="color: red;"> *</span><br><input  style="width: 50%;" type="text" name="paddress">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">
												Email<span style="color: red;"> *</span><br><input  style="width: 50%;" type="email" name="pemail">
												</div>
												<div style="padding: 0px; margin-bottom: 10px;" class="col-md-12 col-lg-12">												
												Role in Relation to Journal<span style="color: red;"> *</span><br>
												If you are not one of these roles, please contact the publisher to express your<br> interest in evaluation.
												<select name="prole" size="1" style="width: 50%;">
													<option selected>-Select Role-</option>
													<option>Editor</option>
													<option>Publisher</option>
												</select>
												</div>
												<div style="padding: 0px; margin-bottom: 30px;" class="col-md-12 col-lg-12">
												Phone<span style="color: red;"> *</span><br><input  style="width: 50%;" type="text" name="pphone">
												</div>
												<div style="padding: 0px; margin-bottom: 50px; text-align: right;" class="col-md-12 col-lg-12">
												<input  style="background-color:#424890; color: white;" type="submit" name="submit" value="SUBMIT">
												</div>
											</fieldset>
										</form>
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
<?php
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$url=$_POST['url'];
	$editor=$_POST['editor'];
	$pubaddress=$_POST['pubaddress'];
	$country=$_POST['country'];
	$eissn=$_POST['eissn'];
	$printissn=$_POST['printissn'];
	$pubcompany=$_POST['pubcompany'];
	$yrpub=$_POST['yrpub'];
	$issueperyr=$_POST['issueperyr'];
	$rissue=$_POST['rissue'];
	$pdetails=$_POST['pdetails'];
	$subarea=$_POST['subarea'];
	$pname=$_POST['pname'];
	$paddress=$_POST['paddress'];
	$pemail=$_POST['pemail'];
	$prole=$_POST['prole'];	
 	$pphone=$_POST['pphone'];
	
	if($title=='' OR $editor=='' OR $eissn=='' OR $printissn=='' OR $pubcompany=='' OR $yrpub=='' OR $issueperyr=='' OR $rissue=='' OR $pdetails=='' OR $pname=='' OR $paddress=='' OR $pemail=='' OR $prole=='' OR $pphone=='')
	{
		echo "<script>alert('PlS fill all the fields')</script>";
		exit();
	}
	else{
		
require_once('includes/connect.php');
$isql="insert into submitjournal(title,url,editor,pubaddress,country,eissn,printissn,pubcompany,yrpub,issueperyr,rissue,pdetails,subarea,pname,paddress,pemail,prole,pphone)values('$title','$url','$editor','$pubaddress','$country','$eissn','$printissn','$pubcompany','$yrpub','$issueperyr','$rissue','$pdetails','$subarea','$pname','$paddress','$pemail','$prole','$pphone')";
		//if($result = $con->query($isql))
			$result=mysqli_query($con,$isql);
		
		
		if ($result) {
			echo "<script>alert('Journal submitted successfully')</script>";
	
		}
		else
		{echo "<script>alert('Journal NOT submitted')</script>";} 
		
			
		 
	}
	
	}

?>