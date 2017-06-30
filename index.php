<?php 

	require_once 'vendor/autoload.php';

	Twig_Autoloader::register();

	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);

	$template = $twig->loadTemplate('index.tpl');

	$title = "SimplyWorld";

	/*main.tpl*/

	$hmain = "A Generic Page";
	$pmain = "Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.";
	$pmaintwo = "Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.";

	/*header.tpl*/

	$navone = "Home";
	$navtwo = "Registration";
	$navthree = "Check Me";

	echo $template->render(array(
		'title' => $title,
		'hmain' => $hmain,
		'pmain' => $pmain,
		'pmaintwo' => $pmaintwo,
		'navone' => $navone,
		'navtwo' => $navtwo,
		'navthree' => $navthree,
		));
 ?>