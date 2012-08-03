<?php
require_once 'bootstrap.php';
use dsx\PAX\Response;
$oPAX=new Response();
$oTwig = new Twig_Environment(new Twig_Loader_Filesystem(__DIR__."/templates"));

switch($_GET['do']){
	case 'initPage':
		$oPAX->html('body',$oTwig->render('body.html'));
		break;
	default:
		$oPAX->console(var_export($_REQUEST, true));
		break;
}

$oPAX->answer();