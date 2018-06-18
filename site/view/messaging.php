<?php
session_start();
if(!isset($_SESSION['id']))
{
    header('Location: ../view/logout.php');
}
/*if(!isset($_SESSION['id'])) {
	require('../model/stay_connected.php');
	if(is_stay_connected($_COOKIE['fr81_stay_connected']))
		header('Location: ../view/logout.php');*/

require("../controller/messaging.php");
?>

	<!DOCTYPE html>
	<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title>Messagerie</title>

		<!--		<fonts>				-->
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!--		<bootstrap>				-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--		<styles>				-->
		<link rel="stylesheet" href="../styles/messaging.css">
		<!--		<fav icon>				-->
		<link rel="apple-touch-icon" sizes="180x180" href="../favicon_package_v0.16/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../favicon_package_v0.16/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../favicon_package_v0.16/favicon-16x16.png">
		<link rel="manifest" href="../favicon_package_v0.16/site.webmanifest">
		<link rel="mask-icon" href="../favicon_package_v0.16/safari-pinned-tab.svg" color="#4152bc">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="theme-color" content="#e6f0f5">
	</head>

	<body>

		<div class="row fullscreen_height">
			<div class=" col-3 no_padding">
				<div class="menu row ">
					<div class="offset-1 col-6 my_account_messaging ">
						<a href="../view/updateprofile.php" class="menu_inactive">
							<img src="<?php echo($pic_menu);  ?>" alt="">
						</a>
						<a href="../view/updateprofile.php" class="menu_inactive">
							<div>mon compte</div>
						</a>
					</div>
					<div class="col-5 right_align no_padding">
						<a href="../view/swipe.php" class="menu_inactive">swipe</a>
						<a href="../view/logout.php" class="menu_inactive">log out</a>
					</div>

				</div>
				<div class="right_align title">Messages</div>
				<div class="scrollable preview_list">

					<?php 
					
					foreach ($previews as &$preview) {
						if ($preview["message"]["flag_read"]==false){
							echo("<!--			NOT READ-->
								<div class=\"row preview_message\">
									<div class=\"offset-1 col-4 left_preview\">
										<div class='notify_circle'></div>
										<img src=\"<?php echo($preview[\"pic\"]); ?>\" alt="">
				</div>
				<div class=\ "col-7 preview_group \">
					<div class="name">
						<?php echo($preview[\"surname\"]); ?>
					</div>
					<div class="preview not_read">
						<?php echo($preview[\"message\"][\"content\"]); ?>
					</div>
				</div>
			</div> "); } elsif ($preview["message"]["message_id"]==1){ echo("
			<!--			NO MESSAGE-->
			<div class="row preview_message">
				<div class="offset-1 col-4">
					<img src="../images/images_student/alice.png" alt="">
				</div>
				<div class="col-7 preview_group">
					<div class="name">Julie</div>
					<div class="preview no_message_yet"> salut t pas mal lol</div>
				</div>
			</div>
			"); } else echo("
			<!--			NORMAL-->
			<div class="row preview_message">
				<div class="offset-1 col-4">
					<img src="../images/images_student/alice.png" alt="">
				</div>
				<div class="col-7 preview_group">
					<div class="name">Julie</div>
					<div class="preview"> salut t pas mal lol</div>
				</div>
			</div>"); } // $arr vaut maintenant array(2, 4, 6, 8) unset($preview); ?>




		</div>

		</div>
		<div class="col-9 messaging_welcome_pic no_padding">
			<img src="../images/messaging.png" alt="">
		</div>
		</div>
		<script src="../scripts/messaging.js"></script>
	</body>

	</html>
