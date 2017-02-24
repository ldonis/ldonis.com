<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		$html->head();
		echo $html->css('landing', 'Template');
	?>
</head>
<body>
	<header>
		<div>
			<?php echo $html->img('ldonis-casual.jpg', ['alt'=>'ldonis profile picture'], 'Template') ?>
			<p>Founder of <a href="https://www.lesli.tech">LesliTech</a></p>
			<p>entrepreneur, dreamer, software developer</p>
			<ul>
				<li><a target="_blank" href="https://twitter.com/lgdonis" title="Twitter">
					<i class="g-icon-twitter"></i></a></li>
				<li><a target="_blank" href="https://github.com/ldonis" title="Github">
					<i class="g-icon-github"></i></a></li>
			</ul>
		</div>
	</header>
	<article>
		<?php //echo $html->link('http://ldonis.com', 'I\'m available for freelance projects') ?>
		<a href="mailto:emc2@ldonis.com">I'm available for freelance projects</a>
	</article>
	<footer>
		<p>&copy; ldonis</p>
	</footer>
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