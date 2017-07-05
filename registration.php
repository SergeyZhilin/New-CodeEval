<?php 

	require_once 'vendor/autoload.php';
	require_once 'validators/validation.php';

	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);

	$template = $twig->loadTemplate('registration.tpl');

	$title = "Registration";

	/*reg.tpl*/

	$hcontacts = "Get in touch";
	$pcontacts = "Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.";
	$username = "User Name or Email";
	$email = "Email";
	$password = "Password";
	$social = "Login with social";
	$sendmes = "Registration";
	$login = "Login";
	$name = "User Name";


	echo $template->render(array(
		'title' => $title,
		'hcontacts' => $hcontacts,
		'pcontacts' => $pcontacts,
		'name' => $name,
		'email' => $email,
		'social' => $social,
		'sendmes' => $sendmes,
		'password' => $password,
		'login' => $login,
		'username' => $username,
		));


?>