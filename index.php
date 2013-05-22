<!DOCTYPE HTML>
<html>
<head>
<title>PAX - phP Ajax eXtension</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="http://www.steamdev.com/snippet/css/jquery.snippet.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
<script type="text/javascript" src="vendor/dsx/pax/jquery.pax.js"></script>
<script type="text/javascript" src="http://www.steamdev.com/snippet/js/jquery.snippet.min.js"></script>
<script type="text/javascript" src="https://raw.github.com/jgallen23/toc/master/dist/jquery.toc.min.js"></script>

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
<body></body>
</html>