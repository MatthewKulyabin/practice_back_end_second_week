<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<style>
		li {
			display: inline;
			margin-right: 1%;
		}
	</style>
</head>
<body>
	<nav>
		<ul style="display:inline">
			<li><a href="/">Main</a></li>
			<li><a href="/program">Programs</a></li>
		</ul>
	</nav>
	<?php include 'application/views/'.$content_view; ?>
</body>
</html>

