<?php

function conn(){
	try {
		return new PDO("mysql:host=localhost;dbname=streetfoodexpress","root","");
	} catch(PDOException $e){
		echo $e->getMessage();
	}
}

function insert($table, $data, $fields){
	$val = array();
	foreach ($data as $value) $val[] = "?";
	$values = implode(",", $val);
	$fld = implode(",", $fields);
	$sql = "INSERT INTO $table($fld) VALUES($values)";
	$stmt = conn()->prepare($sql);
	$status = $stmt->execute($data);
	if($status){
		return true;
	}
}