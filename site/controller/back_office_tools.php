<?php

function build_csv($file, $list){
  $fp = fopen($file, 'w');
  foreach ($list as $fields) {
    fputcsv($fp, $fields);
  }
  fclose($fp);
  error_log(print_r("Fichier fini", TRUE));
}

function download_file($file){
  if (file_exists($file)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($file).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		readfile($file);
		exit;
	}
}

function student_is_null($student){
  if($student->getSurname() == null)
    return true;
  else
    return false;

}
function array_unsubs($file){
	$fileHandle = fopen($file, "r");
	$array_unsubs = array();
	while(($row = fgetcsv($fileHandle, 0, ",")) !==FALSE){
		$array_unsubs[] = row[0].row[1];
	}
	return $array_unsubs;
}



?>
