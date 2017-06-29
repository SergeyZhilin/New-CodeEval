<?php 

	require_once 'vendor/autoload.php';

	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);

	$template = $twig->loadTemplate('index.php');

	$title = "SimplyWorld";
	$next = "Next";
	$cool = "Cool";
	$pcheck = "Insert your code, and press next";
	$circs = "Числа для проверки: Fizz- 2; Buzz - 5; Общая длина - 45";
	$intro = "Welcome";
	$pintro = "Just press next, and go check your code ;)";
	$one = "Inserted Code";
	$two = "Result";
	$three = "Get in touch";
	$result = "You result : ";
	$welcome = "Welcome";
	$hcontacts = "Get in touch";
	$pcontacts = "Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.";
	$name = "Name";
	$email = "Email";
	$message = "Message";
	$address = "Address";
	$phone = "Phone";
	$social = "Social";
	$sendmes = "Send Message";

	echo $template->render(array(
		'title' => $title,
		'next' => $next,
		'cool' => $cool,
		'pcheck' => $pcheck,
		'pintro' => $pintro,
		'circs' => $circs,
		'intro' => $intro,
		'one' => $one,
		'two' => $two,
		'three' => $three,
		'result' => $result,
		'welcome' => $welcome,
		'hcontacts' => $hcontacts,
		'pcontacts' => $pcontacts,
		'name' => $name,
		'email' => $email,
		'message' => $message,
		'address' => $address,
		'phone' => $phone,
		'social' => $social,
		'sendmes' => $sendmes,
		));
 ?>