<?php
/* Define a function that accepts the current page and the target link 
/* If the current page and the target link are the same, this function
/* echos the string "active," otherwise it echos nothing, ""      */
function checkActive($currfile, $linktarget){
	if strncmp($currfile,$linktarget)
		echo 'active';
	else
		echo '';	
	}
	
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>

	<!-- Basic meta tags -->
	<meta charset="utf-8">
	<title>Leifer Lab @ Princeton - Optical neurophysiology of behavior</title>
	<meta name="description" content="The Leifer Lab at the Lewis Sigler Institute for Integrative Genomics, Princeton University">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta content="Andrew Leifer" name="author">
	<meta content="Trustees of Princeton University" name="publisher">
	
	<link href="http://www.princeton.edu/main/favicon.ico" rel="shortcut icon">
	
	<!-- Styles -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/font-awesome/font-awesome.css" rel="stylesheet">	<!-- Font Awesome - http://fortawesome.github.com/Font-Awesome -->
	<!-- Built with twitter bootstrap and on forked from "Virae's Plain Template" http://themeforest.net/item/plain/2616790 -->
	
	<!--[if IE 7]>
		<link href="css/font-awesome/font-awesome-ie7.css" rel="stylesheet">
	<![endif]-->
	
	<!-- Web Fonts  -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
	
	<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<?php include_once("analyticstracking.php") ?> <!-- Include google analytics-->

	<!-- Header
	================================================== -->
	<header id="header">

		<!-- Navigation
		================================================== -->
		<nav class="navbar">
		
			<div class="navbar-inner">

				<div class="container">
					<!-- Logo -->
					<div class="brand">
						<a href="http://www.princeton.edu" class="show logo logoleft"></a> 	
					
						<a  href="index.php">
							 <span class="orange">Leifer</span>Lab
						</a>
					</div>

					<a href="http://www.princeton.edu" class="logo logomiddle hidden"></a> 	
					<ul class="nav">
						<li class="active"><a href="index.php" title="Home">Home</a></li>
						<li><a href="research.html" title="Research">Research</a></li>
						<li><a href="publications.php" title="Publications">Publications</a></li>
						 <li><a href="people.php" title="People">People</a></li> 
						<!-- <li><a href="blog.html" title="blog">Blog</a></li> -->
						<li><a href="positions.html" title="Positions">Positions</a></li>
						<li><a href="contact.php" title="Contact us">Contact</a></li>
					</ul>
				</div><!-- end .container -->
				
				
			</div><!-- end .navbar-inner -->
		</nav>

	</header>
	<h1> inside  Header.php: <?php  echo basename(__FILE__, '.php'); ?> </h1> 

	<!-- Content
	================================================== -->
	<!-- End of php/header.php -->
