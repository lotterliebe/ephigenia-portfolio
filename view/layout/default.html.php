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
		<header class="banner" role="banner">
			<h1>Marcel Eichner</h1>
			<nav>
				<ul>
					<li><a href="<?= $Router->page(); ?>">Blog</a></li>
					<li><a href="<?= $Router->page(); ?>">Code</a></li>
					<li><a href="<?= $Router->page(); ?>">Illustration</a></li>
					<li><a href="<?= $Router->page(); ?>">About</a></li>
				</ul>
			</nav>
		</header>
		<article>
			<?= $content ?>
		</article>
		<footer>
			<nav>
				<ul>
					<li><a href="http://twitter.com/ephigenia" class="me external">Twitter</a></li>
					<li><a href="<?= $Router->page(); ?>">About</a></li>
					<li><a href="<?= $Router->page(); ?>">Contact</a></li>
					<li><a href="<?= $Router->page(); ?>">Imprint</a></li>
				</ul>
			</nav>
		</footer>
	</div>
</body>
</html>