<?php
require_once 'bootstrap.php';
use \Pax\Response;
$oPAX	= new Response();
$oTwig	= new Twig_Environment(new Twig_Loader_Filesystem(__DIR__."/templates"));


switch(isset($_GET['do'])?$_GET['do']:null){
	case 'initPage':
		$oPAX->html('body',$oTwig->render('body.html'));
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
	->script('$("pre.php").snippet("php",{style:"bipolar",showNum:false,menu:false});')
	->script('$("pre.html").snippet("html",{style:"bipolar",showNum:false,menu:false});')
	->script('$("pre.js").snippet("javascript",{style:"bipolar",showNum:false,menu:false});')
	->script("$('#toc').toc({'onHighlight': function(el) {}});")
	->answer();