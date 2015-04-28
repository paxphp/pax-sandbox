<?php
require_once 'bootstrap.php';

$oPAX	= new Pax\Response();

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
	case '_debug':
		$oPAX->_debug('debug output', print_r($oPAX,true));
	break;
	case 'css':
		$oPAX->css('div.example-css', 'background-color','red');
		$oPAX->css('div.example-css', 'color','white');
		$oPAX->append('div.example-css p', ' Styles applied!');
	break;
	case 'css-reset':
		$oPAX->css('div.example-css', 'background-color','');
		$oPAX->css('div.example-css', 'color','');
		$oPAX->append('div.example-css p', ' Styles removed!');
	break;
	case 'class':
		$oPAX->addClass('div.example-addClass', 'example-blue');
		$oPAX->removeClass('div.example-removeClass', 'example-blue');
		$oPAX->removeClass('div.example-removeClassAll');
	break;
	case 'beforeafter':
		$oPAX->before('div.example-before', 'Added before');
		$oPAX->after('div.example-after', 'Added after');
	break;
	case 'prependappend':
		$oPAX->prepend('div.example-prepend', 'Prepend content');
		$oPAX->append('div.example-append', 'Append content');
	break;
}
$oPAX->answer();