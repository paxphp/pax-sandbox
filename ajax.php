<?php
require_once 'bootstrap.php';
use dsx\PAX\Response;
$oPAX	= new Response();
$oTwig	= new Twig_Environment(new Twig_Loader_Filesystem(__DIR__."/templates"));


switch(isset($_GET['do'])?$_GET['do']:null){
	case 'initPage':
		$oPAX->html('body',$oTwig->render('body.html'));
		break;
	case 'about':
		$oPAX->html('#content',$oTwig->render('pages/about.html'));
		break;
	case 'docs':
		$oPAX->html('#content',$oTwig->render('pages/docs.html'));
		break;
	case 'examples':
		$oPAX->html('#content',$oTwig->render('pages/examples.html'));
		$oPAX->script('$("pre.php").snippet("php",{style:"golden",showNum:false,menu:false});');
		break;
	default:
		$oPAX->console(var_export($_REQUEST, true));
		break;
}

$oPAX->answer();