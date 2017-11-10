<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Fard de pleoape</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	

	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo">Makeup world!</a>
									<ul class="icons">
										<li><a href="https://twitter.com/twitter" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/?hl=ro" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

					<!-- Content -->
						<section>
							<header class="main">
								<h2 style="text-align:center;">THE 24K NUDE EYESHADOW PALETTE</h2>
							</header>
							<div align="middle">
								<img src="fard de pleoape/img01.jpg" alt=""/>
								<p>About the product:~Dare to go nude with shimmering gold eyeshadow~12-shade eyeshadow palette~13 eyeshadow looks with duo, trio, and quad color combinations~Includes one dual ended eyeshadow applicator</p>
							</div> 


<!--
<div id="reviewStars-input">
	<h3> Voteaza</h3>
	<input id="star-4" type="radio" name="reviewStars"/>
	<label title="gorgeous" for="star-4"></label>

	<input id="star-3" type="radio" name="reviewStars"/>
	<label title="good" for="star-3"></label>

	<input id="star-2" type="radio" name="reviewStars"/>
	<label title="regular" for="star-2"></label>

	<input id="star-1" type="radio"  name="reviewStars"/>
	<label title="poor" for="star-1"></label>

	<input id="star-0" type="radio" name="reviewStars"/>
	<label title="bad" for="star-0"></label>
</div>
  -->
  


<form method="post" action="//submit.form" onSubmit="return validateForm();">
<div class="stars" align="middle">
	
  <h3>Parerea ta despre acest produs: </h3>
  
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
 
</div>
<div style="width: 400px;">
</div>
<div style="padding-bottom: 18px;">Nume<span style="color: red;"> *</span><br/>
<input type="text" id="data_11" name="data_11" style="width : 450px;" class="form-control"/>
</div>

<div style="padding-bottom: 18px;">Comentariu<span style="color: red;"> *</span><br/>
<textarea id="data_8" ${readonly} name="data_8" style="width : 450px;" rows="10" class="form-control"></textarea>
</div>
<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
</form>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('data_11').value.trim())) {
alert('Reviewer is required!');
return false;
}
if (isEmpty(document.getElementById('data_4').value.trim())) {
alert('Title is required!');
return false;
}
if (isEmpty(document.getElementById('data_8').value.trim())) {
alert('Review is required!');
return false;
}
if (!document.getElementById('data_9_0').checked && !document.getElementById('data_9_1').checked && !document.getElementById('data_9_2').checked ) {
alert('Would you recommend this product? is required!');
return false;}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
</section>
							
		<!-- /container -->

					<div class="clear"></div>

						</section>

							<!-- Section -->
								<section>
								</section>
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
										<li><a href="index.html">Acasa</a></li>
										<li><a href="generic.html">Despre</a></li>
										
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
															$str .= '<li><a href="produs.php?id='.$row2['id'].'">'.$row2['name'].'</a></li>';
														}
														// $str .= '<img src="images/'.$row2['poza'].'" />'
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