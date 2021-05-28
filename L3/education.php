<!doctype html>

<html lang="en">
<head>
	<title>Education</title>
	<link rel="stylesheet" href="css/index.css?v=1.0">
	<script src="js/index.js"></script>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="educationBody">
	<?php include "php/sidenav.php";?>

	<div class="backdrop-container" id="backdrop"></div>

	<?php include "php/sidebar.php";?>

	<div class="navbar">
		<ul>
			<li><a href="#coursesNow">Courses Now</a></li>
			<li><a href="#coursesPassed">Already passed</a></li>
			<li><a href="#certifications">Certifications</a></li>
			<li><a href="#languages">Languages</a></li>
		</ul>
	</div>

	<main>
		<header><h2>Education</h2></header>
		<div id="education">
			<p>Currently I'm studying at <a href="http://pwr.edu.pl/en/">Wroclaw University of Science and Technology</a> at 3<sup>rd</sup> year, the Faculty of Fundamental Problems of Technology, department of Computer Science.</p>
		</div>
		
		<div id="coursesNow" class="coursesNow">
			<h4><p>Now studying this courses<p></h4>
			<ul>
				<li>Embedded Systems</li>
				<li>Modern WWW Technologies</li>
				<li>Mobile Applications</li>
				<li>Reliable IT Systems</li>
				<li>Computer Graphics</li>
				<li>Concurrent Programming</li>
			</ul>
		</div>

		<h4><p>Already passed:</p></h4>
		<div id="coursesPassed" class="flexContainer">
			<div id="5th">
				<h5>5<sup>th</sup> semestr</h5>
				<ul>
					<li>Team Programming</li>
					<li>Scientific Computing</li>
					<li>Cybersecurity</li>
					<li>Information Theory</li>
					<li>Developer Environment</li>
				</ul>
			</div>

			
			<div id="4th">
				<h5>4<sup>th</sup> semestr</h5>
				<ul>
					<li>Algorithms and Data Structures</li>
					<li>Network Technology</li>
					<li>Python</li>
					<li>Programming in Logic (Prolog)</li>
					<li>Introduction to Graph Theory</li>
					<li>Social Communication</li>
					<li>Entrepreneurship</li>
				</ul>
			</div>

			
			<div id="3rd">
				<h5>3<sup>rd</sup> semestr</h5>
				<ul>
					<li>Databases</li>
					<li>Programming Technology</li>
					<li>Probabilistic Methods and Statistics</li>
					<li>Architecture of Computers and Operating Systems</li>
				</ul>
			</div>

			
			<div id="2nd">
				<h5>2<sup>nd</sup> semestr</h5>
				<ul>
					<li>Discrete Mathematics</li>
					<li>Mathematical Analysis 2</li>
					<li>Legal Problems of Computer Science</li>
					<li>Physics</li>
					<li>Abstract Algebra and Coding</li>
					<li>Programming Course</li>
				</ul>
			</div>

			
			<div id="1st">
				<h5>1<sup>st</sup> semestr</h5>
				<ul>
					<li>Introduction to Computer Science and Programming</li>
					<li>Algebra with analytical geometry</li>
					<li>Mathematical Analysis 1</li>
					<li>Logic and Formal Structures</li>
				</ul>
			</div>
		</div>

		<h3><p>Certifications</p></h3>
		<div id="certifications">
			<h4><p>Coursera:<p></h4>
			<ul>
				<li><a href="https://www.coursera.org/account/accomplishments/verify/XPAF5Y28LP8N">Crash Course on Python</a></li>
			</ul>
			<h4><p>Dataquest.io:<p></h4>
			<ul>
				<li><a href="https://app.dataquest.io/view_cert/3ABKCFW051O4UUMPKIB1/">Deep Learning Fundamentals Course</a></li>
				<li><a href="https://app.dataquest.io/view_cert/Y4UWY2FNW28LE40I2MW2/">Exploratory Data Visualization</a></li>
				<li><a href="https://app.dataquest.io/view_cert/UGRWEUIH9EGH125BHYAQ/">Machine Learning Fundamentals Course</a></li>
				<li><a href="https://app.dataquest.io/view_cert/JOQ1QWPH6HC6PIJ7NUH5/">Statistics Fundamentals</a></li>
			</ul>
		</div>

		<h3><p>Languages</p></h3>
		<div id="languages">
			<ul>
				<li>Polish - Fluent(C1)</li>
				<li>English - Proficient(B2-C1)</li>
				<li>German - Beginner(&lt;A1)</li>
				<li>Ukranian - Native</li>
				<li>Russian - Native</li>
			</ul>
		</div>
	</main>

	<?php include "php/footer.php";?>
</body>