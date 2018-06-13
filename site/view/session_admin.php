<?php 
require('../controller/mail_function_back.php');
?>
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title>Admin</title>
		<link rel="stylesheet" href="../styles/session_admin.css">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
		<div class="menu">
			<a href="../view/logout.php" >log out</a>
		</div>
		<form action="" method="POST">
			<div id="export_part">
				<div id="export">Export CSV</div>
				<div id="button_export">
					<input type="button" id="list_student" onclick="list_student.html" value="Liste de tous les étudiants inscrit"></input>
					<input type="button" id="list_match" onclick="list_match.html"value="Liste des couples parrains filleuls"></input>
					<input type="button" id="list_unsubscribe" onclick="list_unsubscribe.html"value="Liste des étudiants non inscrit"></input>
				</div>
			</div>
			<div id="action_match_part">
				<div id="action_match">Action de match</div>
				<div id="button_actionb">
					<input type="button" id="forced_matchunsub" onclick="forced_subscribe.html" value="Matcher les étudiants non-inscrits"></input>
					<input type="button" id="match_unmatchstudent" onclick="match_student.html" value=" Matcher les étudiants non appareillés"></input>
				</div>
			</div>
			<div id="envoi_mail_part">
			<div id="envoi_mail">Envoi d'emails</div>
				<div id="button_mail">
					<input type="button" id="relance_unsubscribe" onclick="on_mail_unmatch()"  value="Relancer par mail les étudiants non inscrit"></input>
					<input type="button" id="recap_student"onclick="recap_student.html" value="Envoyer un mail récapitulatif aux étudiants"></input>
					<input type="button" id="relance_unmatch" onclick="relance_unmatch.html" value="Relancer par mail les étudiants non appareillés"></input>
				</div>
			</div>
		</form>
		<script src="../scritps/session_admin.js"></script> 
	</body>
</html>