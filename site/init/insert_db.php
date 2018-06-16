<?php
require_once("../controller/better_crypt.php");
require_once("../model/data_crypter.php");
require_once("../model/db_connect.php");

function add_admin(){
  $db = db_connect();
	if($db) {
  $query = "INSERT INTO student (surname, email, student_password, year,
    description, score, adjective_1, adjective_2, adjective_3, validate_account, admin)
    VALUES (:surname, :email, :student_password, 1, :description, 500, 1, 2, 3, true, true)";
      $statement = $db->prepare($query);
      $statement->bindValue(':surname', encrypt_data("admin"));
      $statement->bindValue(':email', encrypt_data("admin.admin"));
      $statement->bindValue(':description', "description");
      $statement->bindValue(':student_password', better_crypt("88888888"));
      $statement->execute();
}
}

add_admin();
?>
