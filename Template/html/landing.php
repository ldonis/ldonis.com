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
</body>
</html>