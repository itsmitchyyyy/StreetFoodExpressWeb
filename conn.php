<?php

function conn(){
	try {
		return new PDO("mysql:host=localhost;dbname=streetfoodexpress","root","");
	} catch(PDOException $e){
		echo $e->getMessage();
	}
}

function login($table, $data, $fields) {
	$sql = "SELECT * FROM $table WHERE $fields[0] = ?";
	$stmt = conn()->prepare($sql);
	$stmt->execute(array($data[0]));
	if($stmt->rowCount() > 0) {
		$dbData = $stmt->fetch(PDO::FETCH_ASSOC);
		if(password_verify($data[1], $dbData['password'])){
			return $dbData;
		} else {
			return array('status' => 'not_match');
		}
	}
	else {
		return array('status', 'failed');
	}
}

function insert($table, $data, $fields){
	$val = array();
	foreach ($data as $value) $val[] = "?";
	$values = implode(",", $val);
	$fld = implode(",", $fields);
	$exists = "SELECT * FROM $table WHERE email = :email";
	$statement = conn()->prepare($exists);
	$statement->bindParam(":email", $data[4]);
	$statement->execute();
	if($statement->rowCount() > 0) {
		return array('status' => 'exists');
	} else {
		$sql = "INSERT INTO $table($fld) VALUES($values)";
		$stmt = conn()->prepare($sql);
		$stmt->execute($data);
		return array('status' => 'success');
	}
}