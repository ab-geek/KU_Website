<?php require('config.php') ?>

<html>
<head>
	<title><?php echo $site_name; ?></title>
	<link href="css/style.css" rel="stylesheet">
	<script src="js/ssn.js"></script>
</head>
<body>
	<!-- <div id="wrapper"> -->
		<div id="header">
				<!-- start #top menu -->
				<div id="top_menu">
					<div class="full_center">
						<ul>
							<!-- TODO: all li must be written with no spaces and in single line. -->
							<li><a href="">About</a></li>
							<li><a href="">Apply</a></li>
							<li><a href="">Student Life</a></li>
							<li><a href="">Research</a></li>
						</ul>
					</div>
				</div>
				<!-- end #top menu -->
			<div id="logo">
				<img id="main_logo" src="images/ku_logo.jpg"></img>
				<div class="full_center">
					
					<h1><a href="index.php"><?php echo $site_name?></a></h1>
					<p>Quality Education for Leadership</p>
					
				</div>
			</div>
			<div id="menu">
				<div class="full_center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>
						    <a href="#">About KU</a>
						    <ul>
						      <li>University</li>
						      <li>FAQ</li>
						      <li>Site Map</li>
						    </ul>
					 	</li>
					 	<li>
						    <a href="#">Academics</a>
						    <ul>
						      <li>University</li>
						      <li>FAQ</li>
						      <li>Site Map</li>
						    </ul>
					 	</li>
					 	<li>
						    <a href="#">Admission</a>
						    <ul>
						      <li>University</li>
						      <li>FAQ</li>
						      <li>Site Map</li>
						    </ul>
					 	</li>
					 	<li>
						   <a href="#">School</a>
						    <ul>
						      <li>University</li>
						      <li>FAQ</li>
						      <li>Site Map</li>
						    </ul>
					 	</li>
					 	<li>
						    <a href="#">Exam</a>
						    <ul>
						      <li>University</li>
						      <li>FAQ</li>
						      <li>Site Map</li>
						    </ul>
					 	</li>
					 	<li>
						    <a href="#">Resources</a>
						    <ul>
						      <li>University</li>
						      <li>FAQ</li>
						      <li>Site Map</li>
						    </ul>
					 	</li>
						
					</ul>
				</div>
				<!-- end #menu -->

				<!-- start #image_gallery or event notice -->
				<div id="flash">
				</div>
			</div>

		</div>
		<!-- end #header -->