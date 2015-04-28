<!DOCTYPE HTML>
<html>
<head>
<title>PAX - phP Ajax eXtension</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/styles/zenburn.min.css">

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/highlight.min.js"></script>
<script type="text/javascript" src="vendor/pax/pax/jquery.pax.js"></script>
<script type="text/javascript" src="js/toc.min.js"></script>

<script type="text/javascript">
<!--
	$.ajaxSetup({
		url: "ajax.php",
		});
	$.ajax({
		data: {"do":"initPage"}
	});
	$.pax("addActions", {test : function(oJob){alert(oJob.c);}});
//-->
</script>
</head>
<body>
<div id="wrapper">

</div>
</body>
</html>