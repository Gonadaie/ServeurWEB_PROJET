<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Sign up</title>
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/signup_login.css">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
	<div class="row fullscreen-height">
		<div class="col-7 left_part ">
			<a class="home-btn" href="/"> &#139; Home Page</a>
		</div>
		<div class="col-5 right_part">
			<div class="row fullscreen_height">
				<div class="col-6 offset-3 ">
					<div class="formulaire">
						<div class="title_logo">
							<div><img src="../images/singUp.png" class="cloud2"></div>
						</div>
						<div>

							<form method="post" onsubmit="return sign_up(this)" id="formsignup">
								<div>
									<div class="space_top"><label>Email</label></div>
									<div class="inline">
										<input type="text" name="mail" id="mail" onblur="checkMail(this)"></input>
									</div>
									<div class="inline etu">@etu.parisdescartes.fr</div>
									<p class="error_message" id="mail_already_exist"> Ce mail exite déjà !</p>
									<p class="error_message" id="mail_not_valid">Adresse mail invalide !</p>
								</div>
								<div>
									<div class="space_top"><label>Mot de passe</label></div>
									<input type="password" name="password" id="password" placeholder="8 characters required" onblur="checkPassword(this)"></input><br>
									<p class="error_message" id="password_not_valid">Mot de passe trop court</p>
								</div>
								<div>
									<div class="space_top">
										<label>Année</label>
									</div>
									<div class="etu">
										<input type="radio" name="year" value="1" id="first" checked="checked"></input> <label for="first"><span>DUT1</span></label>
										<input type="radio" name="year" value="2" id="second"></input> <label for="second"><span>DUT2</span></label>
									</div>
								</div>
								<div>
									<input type="submit" value="Sign up" id="submit_signup"></input>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../scripts/checkForm.js"></script>
	<script src="../scripts/sign_up.js"></script>
</body>

</html>
