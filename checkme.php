<?php 

	require_once 'vendor/autoload.php';

	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);

	$template = $twig->loadTemplate('checkme.tpl');

	$title = "Check Me";

	/*button Next, Back*/

	$next = "Next";
	$back = "Back";
	
	/*check.tpl*/

	$cool = "Cool";
	$pcheck = "Insert your code, and press next";
	$circs = "Числа для проверки: Fizz- 2; Buzz - 5; Общая длина - 45";
	
	/*intro.tpl, sidebar.tpl*/

	$intro = "Welcome";
	$pintro = "Just press next, and go check your code ;)";
	
	/*sidebar.tpl*/

	$one = "Inserted Code";
	$two = "Result";
	$three = "Report a bug";

	/*result.tpl*/

	$result = "You result : ";
	
	/*contacts.tpl*/

	$hcontacts = "Report a bug";
	$pcontacts = "Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.";
	$name = "Name";
	$email = "Email";
	$message = "Message";
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
		'social' => $social,
		'sendmes' => $sendmes,
		'back' => $back,
		));
 ?>