<?php
require("../model/swipe.php");

require("../model/get_student.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $array_student = getArrayStudents(get_student_by_email($_POST['mail']));
  $json_array = json_encode($array_student);
  echo $json_array;
}
else{
  $array_student = getArrayStudents(get_student_by_id($_SESSION['id']));
}

 ?>