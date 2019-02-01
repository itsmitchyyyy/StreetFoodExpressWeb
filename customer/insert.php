<?php
include '../conn.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$userType = $_POST['userType'];

$table = 'user';
$data = array($firstName, $lastName, $gender, $birthdate, $email, $password, $userType);
$fields = array('firstName', 'lastName', 'gender', 'birthdate', 'email', 'password', 'userType');

$status = insert($table, $data, $fields);
echo json_encode($status);