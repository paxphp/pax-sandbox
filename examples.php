<?php
require_once 'bootstrap.php';

$oPAX	= new dsx\PAX\Response();

switch(isset($_GET['do'])?$_GET['do']:null){
	case 'console':
		$oPAX->console($_GET['content']);
	break;
	case 'alert':
		$oPAX->alert($_GET['content']);
	break;
	case 'html':
		$oPAX->html('div.example-html',$_GET['content']);
	break;
	case 'bind':
		$oPAX->bind('button.example-bind', 'click', 'alert("binding an Alert!")');
		$oPAX->html('button.example-bind', 'Click (ON)');
	break;
	case 'unbind':
		$oPAX->unbind('button.example-bind','click');
		$oPAX->html('button.example-bind', 'Click (OFF)');
	break;
	case 'attr-disabled':
		$oPAX->attr('button.example-attr', 'disabled', true);
		$oPAX->html('button.example-attr', 'Click (Disabled)');
	break;
	case 'attr-enabled':
		$oPAX->attr('button.example-attr', 'disabled', false);
		$oPAX->html('button.example-attr', 'Click (Enabled)');
	break;
}
$oPAX->answer();