const yes = document.querySelector(".yes");
const swipe_profile = document.querySelector(".swipe_profile");
const no = document.querySelector(".no");
var recycled = document.querySelector(".bounceOutLeft");
var hearted = document.querySelector(".bounceOutRight");
const profil_link = document.querySelector("#swipe_picture");
const no_more_profile = document.querySelector(".no_more_profile");
const really_no_more_profile = document.querySelector(".really_no_more_profile");
const available_profiles = document.querySelector(".available_profile");
const reset_dislike = document.querySelector(".reset_like");
var end_of_swipe = false;

reset_dislike.addEventListener("click", () => {
	ajax_reset_dislike();
});


yes.addEventListener("click", () => {
	setTimeout(function () {
		setNewProfile();
	}, 1000);
	swipe_profile.classList.add("bounceOutRight");
	if (!end_of_swipe)
		ajax_liked_someone();
});

no.addEventListener("click", () => {
	setTimeout(function () {
		setNewProfile();
	}, 1000);
	swipe_profile.classList.add("bounceOutLeft");
	if (!end_of_swipe)
		ajax_disliked_someone();
});

function top_back() {
	swipe_profile.classList.remove("bounceOutRight");
	swipe_profile.classList.remove("bounceOutLeft");
	swipe_profile.classList.add("bounceInDown");
}


function ajax_reset_dislike() {
	console.log("we are in reset dislike function");
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var response = this.responseText.replace(/\n/g, "");
			console.log(response);
			if (response > 0) {
				window.location = "../view/swipe.php";
			} else {
				really_no_more_profile.style.display = "block";
				available_profiles.style.display = "none";
				no_more_profile.style.display = "none";
			}
		}
	}

	xhttp.open("GET", "../controller/reset_dislike.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();
}


function ajax_liked_someone() {
	console.log("we are in liked function");
	var xhttp = new XMLHttpRequest();


	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var response = this.responseText.replace(/\n/g, "");
			console.log(this.responseText);

			if (response == "MATCH") {
				CreateAFormInsideMyDivAndSubmitIt();
				console.log("crete form match");

			} else if (this.responseText == "LIKE") {
				return true;
			}
		}

	}
	xhttp.open("POST", "../controller/like_student.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	console.log(email);
	xhttp.send("mail=" + email);

	console.log("end");
	return false;
}

function ajax_disliked_someone() {
	console.log("we are in disliked function");
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			var response = this.responseText.replace(/\n/g, "");
			if (this.responseText == "DISLIKE") {
				return true;
			}
		}
	}
	xhttp.open("POST", "../controller/dislike_student.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	console.log(email);

	xhttp.send("mail=" + email);

	console.log("end");
	return false;
}


function setNewProfile() {
	if (students.length > 0) {
		available_profiles.style.display = "block";
		no_more_profile.style.display = "none";
		document.getElementById("swipe_name").innerHTML = students[0].surname;
		if (students[0].description != null) //TODO Remove when we'll have a clean DB
			document.getElementById("swipe_description").innerHTML = students[0].description;

		var adjs = students[0].adj1 + " - " + students[0].adj2 + " - " + students[0].adj3;
		document.getElementById("swipe_adj").innerHTML = adjs;

		if (students[0].pic != undefined) {
			pic = students[0].pic;
			document.getElementById("swipe_picture").src = pic;
		} else document.getElementById("swipe_picture").src = '';
		email = students[0].email;
		students.splice(0, 1);
	} else {
		available_profiles.style.display = "none";
		no_more_profile.style.display = "block";
		end_of_swipe = true;
	}

	top_back();
}

swipe_profile.addEventListener("webkitAnimationEnd", top_back, false);
swipe_profile.addEventListener("animationend", top_back, false);
setNewProfile();

//go to profil other user
profil_link.addEventListener("click", () => {
	document.location.href = "../view/profile_other_user.php?email=" + email;
})

//redirection with POST data
function CreateAFormInsideMyDivAndSubmitIt() {
	var mydiv = document.getElementById('myformcontainer').innerHTML = '<form id="post_data" method="post" action="../view/match.php"><input name="mail" type="hidden" value="' + email + ' "/><input name="pic" type="hidden" value="' + pic + '" /></form>';
	f = document.getElementById('post_data');
	if (f) {
		f.submit();
	}
}
