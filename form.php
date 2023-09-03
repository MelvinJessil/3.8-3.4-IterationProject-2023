<html>
<head>
	<title>PHP Form Design</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<div id = "main">
			<h1>Contact</h1>
			<hr>
			<?php
			//Pull links from the nav.php page and places them in the navigation bar div
			require("nav.php")//'require' is 100% needed fpr tje sote tp rim
			?>
			<br><br><hr>
			<?php
			//Get the connection to the data base in phpMyAdmin
				require_once("13dit_phpForm_mysqli.php");
			?>
<br>
	
<!-- Add my Notepad++ form.html code here... -->		


	<!-- Form -->
	<div class = "contact_container">
		<form action ="connect.php" method="post">
	
		<!-- Name Field -->

		<div class ="row">
			<div class ="column">
				<label for ="name=">Full Name</label>
			</div>
			<div class ="column2">
				<input type ="text" id="name" name="name" placeholder ="Your Full name">
			</div> 
		</div>
	
		<!-- Email Field -->
	
		<div class = "row">
			<div class ="column">
				<label for ="email">Email Address</label>
			</div>
			<div class = "column2">
				<input type = "text" id="email" name="email" placeholder = " Your Email Address">
			</div>
		</div>
	
		<!-- Contact Number Field -->
	
		<div class = "row">
			<div class ="column">
				<label for ="phone">Contact Number</label>
			</div>
			<div class = "column2">
				<input type = "text" id="phone" name="phone" placeholder = "A Contact Number">
			</div>
		</div>
		<!-- Subject Field -->
		
		<div class = "row">
			<div class = "column">
				<label for = "message">Subject</label>
			</div>
		<div class ="column2">
		<textarea	 id ="message" name="message" placeholder="Write Something..." style="height:200px"></textarea>
			</div>
		</div>
		
		
		<br>
		<!-- Submit Field -->
		
		<div class = "row">
			<input type="submit" value ="Submit">
			</div>
	
			</form>
	
	</div>
		<!-- copyright statement -->
		<div id ="footer">
		&copy; Copyright Melvin Jessil, all rights reserved, Tawa College 2023
		</div>
			
	<body>
<html>
		