<?php 

	require_once 'vendor/autoload.php';
	require_once 'models/CheckMe.php';

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
	
	$resultone = "<h1><font color='blue'><center>Hi! Lets go check your code ;)</center></font></h1>";
	$resulttwo = "<h1><font color='red'><center>Something wrong, check your code ((((</center></font></h1>";
	$resulttree = "<h1><font color='green'><center>All nice.... ))))</center></font></h1>";


	echo $template->render(array(
		'title' => $title,
		'next' => $next,
		'two' => $two,
		'result' => $result,
		'back' => $back,
		'resultone' => $resultone,
		'resulttwo' => $resulttwo,
		'resulttree' => $resulttree,
		));
?>