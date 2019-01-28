<?php
include '../conn.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$table = 'customer';
$data = array($firstName, $lastName, $gender, $birthdate, $email, $password);
$fields = array('firstName', 'lastName', 'gender', 'birthdate', 'email', 'password');

$status = insert($table, $data, $fields);
if($status){
	echo json_encode(array('success' => 'true'));
}else {
	echo json_encode(array('success' => 'false'));
}