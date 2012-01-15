<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= @$pageTitle ?: '[no title]' ?></title>
	<base href="<?= $baseUri ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="shortcut icon" href="<?= $baseUri ?>/favicon.png"/>
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $baseUri ?>/apple-touch-icon.png"/>
	<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400|Oswald" rel="stylesheet" type="text/css">
	<link href="<?= $baseUri; ?>/css/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="app">
		<header id="header" role="banner">
			<h1 class="logo">Marcel Eichner // Ephigenia</h1>
			<nav class="main-menu">
				<ul>
					<li><a href="http://blog.marceleichner.de">Blog</a></li>
					<li><a href="<?= $Router->page(array('path' => 'work')); ?>">Work</a></li>
					<li><a href="<?= $Router->page(array('path' => 'about')); ?>">About</a></li>
				</ul>
			</nav>
		</header>
		<div id="main" <?php if (isset($class)) echo 'class="'.$class.'" '; ?>role="main">
			<article>
				<?= $content ?>
			</article>
		</div>
		<footer id="footer">
			© <?= date('Y'); ?> Marcel Eichner, <a href="<?= $Router->page(array('path' => 'imprint')); ?>">Impressum</a>
		</footer>
	</div>
</body>
</html>