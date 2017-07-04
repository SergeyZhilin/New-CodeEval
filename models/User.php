<?php 

    require_once 'libs/db.php';

	$sql = $conn->prepare("INSERT INTO user (username, email, password) VALUES (:name, :email, :password)");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql->bindParam(':name', $name);
	$sql->bindParam(':email', $email);
	$sql->bindParam(':password', $password);

	$sql->execute();

?>