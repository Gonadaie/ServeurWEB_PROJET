<?php
require("db_connect.php");
$db = db_connect();
$tab_student = array();
if($db) {
	
	$query_get_score = "SELECT score 
	FROM student
	WHERE id_student = :id_score";
	$statement_score = $db->prepare($query_get_score);
	$statement_score->bindValue(':id_score', $_SESSION['id']); 
	$statement_score->execute();
	
	while($row = $statement_score->fetch(PDO::FETCH_ASSOC)){
		$score_student = $row['score'];
	}
	
	$score_min = $score_student - 50;
	$score_max = $score_student + 50;
	
	$query_get_student = "SELECT surname, description
	FROM student
	WHERE score BETWEEN :score_min AND :score_max";
	$statement_student = $db->prepare($query_get_student);
	$statement_student->bindValue(':score_min', $score_min, PDO::PARAM_INT);
	$statement_student->bindValue(':score_max', $score_max, PDO::PARAM_INT);
	$statement_student->execute();
	

	$count = 0;
	
	//var_dump($statement_student);
	
	while($row = $statement_student->fetch(PDO::FETCH_ASSOC)){	
		array_push($tab_student, array('name'=>$row['surname'], 'description'=>$row['description']));
		$count=$count+1;
	}

	for($i = 0; $i < count($tab_student); $i++){
		var_dump($tab_student[$i]);
	}
	
	
}
