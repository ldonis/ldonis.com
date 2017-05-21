<!DOCTYPE html>
<html>
<head>
	<title>Luis Gdonis &bull; Software developer</title>
	<?php
		\Lesli\Web\System\Html::head();
		echo \Lesli\Web\System\Html::css('landing', 'Template');
	?>
</head>
<body>

<?php include $content; ?>

<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-92569549-1', 'auto');
	ga('send', 'pageview');

</script>
</body>
</html>