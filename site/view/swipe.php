<?php
require("../model/swipe.php");
?>
<!DOCTYPE html>
<html lang="fr">


<head>
	<meta charset="utf-8" />
	<title>Log In</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/signup_login.css">
	<link rel="stylesheet" href="../styles/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="menu">
		<a href="#" class="menu_active">swipe</a>
		<a href="../view/updateprofile.php" class="menu_inactive">my account</a>
		<a href="#" class="menu_inactive">messages</a>
		<a href="#" class="menu_inactive">log out</a>
	</div>
	<div class="row fullscreen_height">
		<div class="col-3 swipe_icon no">
			<img src="../images/recycling.png" alt="no">
		</div>
		<div class="col-6 swipe_profil animated ">
			<div class="swipe_face">
				<img class="swipe_cloud" src="../images/swipe_picture.png" alt="cloud">
			</div>
			<div>
				<div class="swipe_name">
					<?php echo htmlspecialchars($name) ?>
				</div>
				<div class="swipe_adj">
					Belle - Intelligente - Sensible
				</div>
				<div class="swipe_description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
		<div class="col-3 swipe_icon yes">
			<img src="../images/heart.png" alt="yes">
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="../scripts/swipe.js"></script>
</body>

</html>
