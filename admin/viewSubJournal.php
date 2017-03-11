<?php
ob_start();
	session_start();
require_once('includes/connect.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Institute Of Science Information (ISI) - View Submitted Journals</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
	<style>
		th{
			
			text-align: center;
			padding: 10px;
		}
	</style>
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
			<li><a href="manageJournals.html"><svg class="glyph stroked arrow left"><use xlink:href="#stroked-arrow-left"/></svg> Back</a></li>
			<li><a href="postJournal.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Post Journals</a></li>
			<li class="active"><a href="viewSubJournal.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>View Submitted Journals</a></li>
			<li><a href="../index.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Go to main Website</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.html"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li>Home</li>
				<li class="active">View Submitted Journals</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Submitted Journals</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div >
				<div class="panel panel-default">
					<div class="panel-body" style="overflow: auto;">
						<table border="1">

							<tr>
						        <th style="width:300px;">Journal Title </th>
						        <th style="width:300px;">Author Name</th>
						        <th style="width:300px;">Author Address</th>
						        <th style="width:300px;">Email</th>
						        <th style="width:300px;">Role</th>
						        <th style="width:300px;">Phone</th>
						        <th style="width:300px;">Subject Area</th>
						        <th style="width:300px;">Access Criteria</th>
						        <th style="width:300px;">Most Recent Issue (Vol, Iss, Yr)</th>
						        <th style="width:300px;">Freq (No. of Issues per Year)</th>
						        <th style="width:300px;">1st Year of Publication</th>
						        <th style="width:300px;">Publishing Company</th>
						        <th style="width:300px;">Print ISSN</th>
						        <th style="width:300px;">e-ISSN</th>
						        <th style="width:300px;">Country of Origin</th>
						        <th style="width:300px;">Publisher Address</th>
						        <th style="width:300px;">Editor-in-Chief </th>
						        <th style="width:300px;">URL </th>

							</tr>
							<?php
							require_once('includes/connect.php');
							$get_data="select * from submitjournal";
							$result = $con->query($get_data);
							while($_POST = $result->fetch_assoc())

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
							?>
							<tr align="center">
							<td><?php echo $title; ?></td>
							<td><?php echo $url; ?></td>
							<td><?php echo $editor; ?></td>
							<td><?php echo $pubaddress; ?></td>
							<td><?php echo $country; ?></td>
							<td><?php echo $eissn; ?></td>
							<td><?php echo $printissn; ?></td>
							<td><?php echo $pubcompany; ?></td>
							<td><?php echo $yrpub; ?></td>
							<td><?php echo $issueperyr; ?></td>
							<td><?php echo $rissue; ?></td>
							<td><?php echo $pdetails; ?></td>
							<td><?php echo $subarea; ?></td>
							<td><?php echo $pname; ?></td>
							<td><?php echo $paddress; ?></td>
							<td><?php echo $pemail; ?></td>
							<td><?php echo $prole; ?></td>
							<td><?php echo $pphone; ?></td>
							<td><a href="update.php?editpost=<?php echo $post_id; ?>">Edit</a></td>
							<td><a href="deletepost.php?deletepost=<?php echo $post_id; ?>">Delete</a></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
				
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
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
