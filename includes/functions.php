<?php

function getMainCat1(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='1'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}

function getMainCat2(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='2'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}
function getMainCat3(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='3'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}
function getMainCat4(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='4'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}
function getMainCat5(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='5'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}
function getMainCat6(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='6'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}
function getMainCat7(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='7'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}
function getMainCat8(){
	global $con;
	$get_cat = "SELECT * FROM main_nav WHERE nav_id='8'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<a href='menu.php?main=$subcat_id'>$subcat_title</a>";
	}
}


function getSubCat2(){
	global $con;
	$get_cat = "SELECT * FROM sub_nav WHERE main_navid='2'";
	$run_cat = mysqli_query($con, $get_cat);
	
	while($row_cat=mysqli_fetch_array($run_cat)){
		
		$subcat_id=$row_cat['nav_id'];
		$subcat_title=$row_cat['nav_name'];
		
		echo "<li><a href='sub_menu.php?main=$subcat_id'>$subcat_title</a></li>";
		
	}
}


?>


