<?php
include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$status = login('customer', array($email, $password), array('email', 'password'));
echo json_encode(array('info' => $status));
