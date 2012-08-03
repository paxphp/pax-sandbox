<?php
use dsx\PAX\Response;

require_once 'lib/dsx/PAX/Responder.php';
require_once 'lib/dsx/PAX/Response.php';
require_once 'lib/dsx/PAX/Task.php';
$oPAX=new Response();
// $oPAX->html('body', 'test');
// $oPAX->prepend('body', 'test2ä<div>ötest</div>');
$oPAX->console('I am a test');
$oPAX->answer();