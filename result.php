<?php 
var_dump($_POST); die();
	require_once 'vendor/autoload.php';

	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);

	$template = $twig->loadTemplate('showresult.tpl');

	$title = "Result";

	/*button Next*/

	$next = "Next";

	/*button Back*/

	$back = "Back";

	/*sidebarresult.tpl*/

	$two = "Result";

	/*result.tpl*/

	$result = "You result : ";


	echo $template->render(array(
		'title' => $title,
		'next' => $next,
		'two' => $two,
		'result' => $result,
		'back' => $back,
		));
?>