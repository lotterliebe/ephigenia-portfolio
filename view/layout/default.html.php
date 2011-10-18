<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title><?= @$pageTitle ?: '[no title]' ?></title>
	<base href="<?= $baseUri ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700|Ubuntu:400,500,700|Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href="<?= $baseUri; ?>/css/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="app">
		<sidebar id="sidebar" role="sidebar">
			<h1 class="logo">Marcel Eichner // Ephigenia</h1>
			<nav class="main-menu">
				<ul>
					<li><a href="http://blog.marceleichner.de">Blog</a></li>
					<li><a href="<?= $Router->page(); ?>">Code</a></li>
					<li><a href="<?= $Router->page(); ?>">Illustration</a></li>
					<li><a href="<?= $Router->page(); ?>">About</a></li>
				</ul>
			</nav>
			<p>
				Marcel Eichner wurde 1983 in Berlin geboren. Er lebt in Berlin als
				Programmierer, Webdesigner, Film-Blogger und Illustrator. Studium des
				Kommunikationsdesigns an der FHTW Berlin. Selbständiger PHP-Programmierer.
				Arbeitete für/an verschiedene Web 2.0-Unternehmen und Open Source Projekten.
			</p>
		</sidebar>
		<div id="main" role="main">
			<article>
				<?= $content ?>
			</article>
		</div>
	</div>
</body>
</html>