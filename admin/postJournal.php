<?php
ob_start();
	session_start();
require_once('includes/connect.php');

if(isset($_POST['publish'])){
	
		$jname = trim($_POST['jname']);
		$jname = strip_tags($jname);
		$jname = htmlspecialchars($jname);
		
		$jdb = trim($_POST['jdb']);
		$jdb = strip_tags($jdb);
		$jdb = htmlspecialchars($jdb);
		
		$jtitle = trim($_POST['jtitle']);
		$jtitle  = strip_tags($jtitle);
		$jtitle  = htmlspecialchars($jtitle);
		
		$aurthor_name = trim($_POST['aurthor_name']);
		$aurthor_name  = strip_tags($aurthor_name );
		$aurthor_name  = htmlspecialchars($aurthor_name);
		
		$issue = trim($_POST['issue']);
		$issue = strip_tags($issue);
		$issue = htmlspecialchars($issue);
		
		$no_pages = trim($_POST['no_pages']);
		$no_pages  = strip_tags($no_pages );
		$no_pages = htmlspecialchars($no_pages );
		
		
		$volume = trim($_POST['volume']);
		$volume = strip_tags($volume);
		$volume= htmlspecialchars($volume);
		
		$date = trim($_POST['date']);
		$date = strip_tags($date);
		$date = htmlspecialchars($date);
		
		
		$issn = trim($_POST['issn']);
		$issn = strip_tags($issn);
		$issn = htmlspecialchars($issn);
		
		$abstract = trim($_POST['abstract']);
		$abstract = strip_tags($abstract);
		$abstract = htmlspecialchars($abstract);
		
		$jcontex= trim($_POST['jcontex']);
		$jcontex = strip_tags($jcontex);
		$jcontex = htmlspecialchars($jcontex);
		
		$keyword= trim($_POST['keyword']);
		$keyword= strip_tags($keyword);
		$keyword = htmlspecialchars($keyword);
		
		// basic name validation
		if (empty($jname)) {
			
			$error[] = "Please enter journal name.";
		}
		if ($jdb === "default") {
			
			$error[] = "Please select journal database.";
		}
		
		if (empty($jtitle)) {
			
			$error[] = "Please enter journal title";
		}
		if (empty($aurthor_name)) {
			
			$error[] = "Please enter author name.";
		}
		if (empty($issue)) {
			
			$error[] = "Please enter issue.";
		}
		if (empty($no_pages)) {
			
			$error[] = "Please enter number of journal pages.";
		}
		if (empty($volume)) {
			
			$error[] = "Please enter journal volume.";
		}
		if (empty($date)) {
			
			$error[] = "Please enter date journal was published.";
		}
		if (empty($issn)) {
			
			$error[] = "Please enter issn.";
		} 
		if (empty($abstract)) {
			
			$error[] = "Please enter journal abstract.";
		} 
		if (empty($jcontex)) {
			
			$error[] = "Please enter journal contex.";
		} 
		if (empty($keyword)) {
			
			$error[] = "Please enter keywords.";
		} 
		
		
		if( !isset($error) ) {

			//insert into database with a prepared statement
			$sql="INSERT INTO journal(name,category,title,aurthor_name,issue,no_of_pages,j_volume,publish_date,ISSN,abstract,text,keyword)
								values('$jname','$jdb','$jtitle','$aurthor_name','$issue','$no_pages','$volume','$date','$issn','$abstract','$jcontex','$keyword')";
			$result=mysqli_query($con,$sql);
			
			if ($result) {
				
				$msg = "Your publication was Successful ";
				
				
		
				
			} else {
				
				echo mysqli_error($con);	
			}
		} 


}








?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Institute Of Science Information (ISI) - Post Journal</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #4636bd" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><span>Institute Of Science Information (ISI)</span> Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="manageJournals.html"><svg class="glyph stroked arrow left"><use xlink:href="#stroked-arrow-left"/></svg>

 Back</a></li>
			<li class="active"><a href="postJournal.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Post Journals</a></li>
			<li><a href="viewSubJournal.php "><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>View Submitted Journals</a></li>
			<li><a href="../index.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Go to main Website</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.html"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->
	
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Post Journal</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Post Journal</a></li>
						</ul>
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
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Post Journal</div>
										<div class="panel-body">
										
											<form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
												<fieldset>
													<!-- Name input-->
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Name Of Journal</label>
														<div class="col-md-6">
														<input id="name" name="jname" type="text" placeholder="Journal name" class="form-control">
														</div>
													</div>
													
												
													<!-- Email input-->
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Journal Database</label>
														<div class="col-md-6">
															<select size="1" name="jdb" class="form-control">
																<option value="default" >Select Journal database</option>
									<?php
							$get_jdb="SELECT * FROM search_db ";
							$run_jdb=mysqli_query($con, $get_jdb);
							while($row_jdb=mysqli_fetch_array($run_jdb)){
								
								$jdb_id=$row_jdb["searchdb_ID"];
								$jdb_name=$row_jdb["DB_name"];
							echo "<option value='$jdb_id'>$jdb_name</option>";
								
							}
							?>
															</select>
															
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Journal Title</label>
														<div class="col-md-6">
														<input id="name" name="jtitle" type="text" placeholder="Journal Title" class="form-control">
														</div>
													</div>
													<!-- Message body -->
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Author Name</label>
														<div class="col-md-6">
														<input id="name" name="aurthor_name" type="text" placeholder="Author name" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Issue</label>
														<div class="col-md-6">
														<input id="name" name="issue" type="text" placeholder="Issue" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">No. Of Pages</label>
														<div class="col-md-6">
														<input id="name" name="no_pages" type="text" placeholder="No. of Pages" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Volume</label>
														<div class="col-md-6">
														<input id="name" name="volume" type="text" placeholder="Volume" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Publish Date</label>
														<div class="col-md-6">
														<input id="name" name="date" type="date" placeholder="Publish Date" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">ISSN</label>
														<div class="col-md-6">
														<input id="name" name="issn" type="text" placeholder="ISSN" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label" for="message">Abstract</label>
														<div class="col-md-9">
															<textarea class="form-control" id="message" name="abstract" placeholder="Please enter Abstract..." rows="5"></textarea>
														</div>
													</div>
													<div class="form-group" style="margin-bottom: 15px;">
														<label class="col-md-2 control-label" for="message">Journal Content</label>
														<div class="col-md-9">
															<textarea class="form-control ckeditor" name="jcontex" rows="6"></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-2 control-label" for="name">Keywords</label>
														<div class="col-md-6">
														<input id="name" name="keyword" type="text" placeholder="keyword" class="form-control">
														</div>
													</div>
													<hr>
													<!-- Form actions -->
													<div class="form-group">
														<div class="col-md-9 col-md-offset-2" style="margin-top: 5px;">
															<input type="submit" name="publish"  value="publish" class="btn btn-primary pull-left">
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
		</div><!--/.row-->
		
		
								
		
					
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
