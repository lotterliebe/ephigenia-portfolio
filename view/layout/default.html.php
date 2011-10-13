<!doctype html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title><?= @$pageTitle ?: '[no title]' ?></title>
	<base href="<?= $baseUri ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= $baseUri; ?>/css/screen.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="app">
		<?= $content ?>
	</div>
</body>
</html>