<?php
include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$status = login('user', array($email, $password), array('email', 'password'));
echo json_encode($status);
