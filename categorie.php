<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Makeup world</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<style>
	#grid {
	display: grid;
	margin-top: 50px;
	grid-template-rows: repeat(3, 1fr);
	grid-template-columns: repeat(3, 1fr);
	grid-gap: 10px;
	}
	#grid > div {
	background-color: white;
	color: white;
	font-size: 4vw;
	padding: 10px;
	  
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	
	height: 200px;
	cursor: pointer;
	}
	
	</style>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
					
						<div class="inner">
							<header id="header">
									<a href="index.html" class="logo">Makeup world!</a>
									<ul class="icons">
										<li><a href="https://twitter.com/twitter" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/?hl=ro" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>
								
							<!--<div id="grid">
							  <div style="background-image: url('mascara/img01.jpg');"></div>
							  <div style="background-image: url('mascara/img01.jpg');"></div>
							  <div style="background-image: url('mascara/img01.jpg');"></div>
							  <div style="background-image: url('mascara/img01.jpg');"></div>
							  <div style="background-image: url('mascara/img01.jpg');"></div>
							</div>-->
							<h1>
								<?php 
									$conn = mysqli_connect("localhost", "root", "", "maduca");
									$whatIWant = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "=") + 1); 
								    $result1 = mysqli_query($conn,"select name from categories c where c.id=$whatIWant"); 
									$row = mysqli_fetch_assoc($result1);
									$str = $row["name"];
									echo $str;
									mysqli_close($conn);
								?>
							</h1>
							
							<div id="grid">
								<?php 
									$whatIWant = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "=") + 1); 
									$conn = mysqli_connect("localhost", "root", "", "maduca");
									//$result = mysqli_query($conn, "select produse.id_categ, produse.poza, produse.nume, categories.id from produse inner join categories where produse.id_categ = categories.id");
									$result= mysqli_query($conn, "select * from produse p, categories c where p.id_categ=c.id and p.id_categ=$whatIWant");
									$str = "";
									//$r = mysqli_query($conn,"select nume from categories where id=$whatIWant");
									//echo '<h1>' $r '</h1>'; 
									while($row = mysqli_fetch_assoc($result)) {
									//	$str .= '<div> <img src='.$row["poza"].' class="redimpoza"> </div>';
									$str .= '<div style="background-image: url('.$row["poza"].');"></div>';
									
									}
									//$strdes = "";
									//while($rowdes = mysqli_fetch_assoc($result)) {
									//$strdes .= '<div></div>';
									//}
									echo $str;
									//echo $strdes;
									mysqli_close($conn);
								?>
							</div>

				
						</div>
					
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index.php">Acasa</a></li>
										<li><a href="generic.php">Despre</a></li>
										<?php
											require('php/connect.php');
											
											$sql = "SELECT * FROM categories WHERE parent_id='0'";
											$result = $conn->query($sql);
											
											$str = "";
											if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
													$str .= '<li>
																<span class="opener">'.$row['name'].'</span>
																<ul>';
															
													$sql2 = "SELECT * FROM categories WHERE parent_id='".$row['id']."'";
													$result2 = $conn->query($sql2);
													
													if ($result2->num_rows > 0) {
														// output data of each row
														while($row2 = $result2->fetch_assoc()) {
															$str .= '<li><a href="categorie.php?id='.$row2['id'].'">'.$row2['name'].'</a></li>';
															//$str .= '<img src="fard de pleoape/'.$row2['poza'].'" />';
														}
													}
															
													$str .= '</ul>
															</li>';
												}
											} else {
												echo ":'(";
											}
											
											echo $str;
										?>
									

									</ul>
								</nav>


							

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>