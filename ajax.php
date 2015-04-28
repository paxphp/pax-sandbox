<?php
require_once 'bootstrap.php';
use \Pax\Response;
$oPAX	= new Response();
$oTwig	= new Twig_Environment(new Twig_Loader_Filesystem(__DIR__."/templates"));


switch(isset($_GET['do'])?$_GET['do']:null){
	case 'initPage':
		$oPAX->html('#wrapper',$oTwig->render('body.html'));
		break;
	case 'about':
		$oPAX->html('#content',$oTwig->render('pages/about.html'));
		break;
	case 'usage':
		$oPAX
			->html('#content',$oTwig->render('pages/usage.html'));
		break;
	case 'examples':
		$oPAX->html('#content',$oTwig->render('pages/examples.html'));
		break;
	default:
		$oPAX->console(var_export($_REQUEST, true));
		break;
}
$oPAX
	->script("$('pre').each(function(i, block) {hljs.highlightBlock(block);});")
	->script("$('#toc').toc({'onHighlight': function(el) {}});")
	->answer();