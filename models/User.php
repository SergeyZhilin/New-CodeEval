<?php 

    require_once 'libs/db.php';
    // $errors = [];
    // if (trim($_POST['name']) == '') {
    // 	$errors[] = 'Введите логин!';
    // }
    // if (trim($_POST['email']) == '') {
    // 	$errors[] = 'Введите email!';
    // }
    // if (trim($_POST['password']) == '') {
    // 	$errors[] = 'Введите пароль!';
    // }
    // if(empty($errors)){
    // 	//Всё хорошо
    // } else{
    // 	// die();
    // 	// echo 'Something wrong';
    // } 

	$sql = $conn->prepare("INSERT INTO user (username, email, password) VALUES (:name, :email, :password)");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql->bindParam(':name', $name);
	$sql->bindParam(':email', $email);
	$sql->bindParam(':password', $password);

	$sql->execute();

?>