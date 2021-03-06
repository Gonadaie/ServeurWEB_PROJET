<?php

require_once("db_connect.php");
require_once("data_crypter.php");

function register_student($student_name, $student_mail, $password_hash, $student_year){

        $db = db_connect();
        if($db){
                $query = "INSERT INTO STUDENT (surname, email, student_password, year, pic, description, score) VALUES (:firstname, :mail, :pass, :year,  '..\images\images_student\alice.png', 'To see a World in a grain of sand And a Heaven in a Wild Flower Hold Infinity in the palm of your hand And Eternity in an hour - William Blake',500)";
                $statement = $db->prepare($query);
                $statement->bindValue(':firstname', encrypt_data($student_name));
                $statement->bindValue(':mail', encrypt_data($student_mail));
                $statement->bindValue(':pass', $password_hash);
                $statement->bindValue(':year', $student_year);
                
                $statement->execute();

        }
}

?>
