<?php
session_start();
echo $_SESSION['type'];
?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="formulier.css" />
		<script src="https://kit.fontawesome.com/8a320e05b1.js" crossorigin="anonymous"></script>
	</head>
	<body> 
	<div class="titel">
			<h1 style="font-family: none; font-size: 100px;">TAILORED</h1>
	</div>
	
	<div class="centerdiv">
		<a href="loginstudent.php">
			<div class="link" onclick="student()" style="width: 150px; height: 150px;">
			<p style="font-size: 15px;">Inloggen als leerling</p>
			<i class="fas fa-user-graduate" style="font-size: 65px; color: purple;"></i>
			</div>
		</a>
		<a href="loginteacher.php">
			<div class="link" style="width: 150px; height: 150px;">
			<p style="font-size: 15px">Inloggen als docent</p>
			<i class="fas fa-chalkboard-teacher" style="font-size: 65px; color: purple;"></i>
			</div>
		</a>
	<!--
		<a href="registreerstudent.php">
			<div class="link">
			<p>Registreer als leerling</p>
			</div>
		</a>
		<a href="registreerteacher.php">
			<div class="link">
			<p>Registreer als docent</p>
			</div>
		</a>
	-->	
	</div>
	<div class="centerdiv" style="top: 90%">
	<h1 style="font-size: 20px">Arjen Smetsers en Hein Overkamp<br>VWO 6 Lek en Linge, Culemborg</h1>
	</div>
	</body>	
</html>
