title: Work
author: [Marcel Eichner](love@ephigeniad.de)
date: 2011-10-18

<ul class="imagelist">
<?php
	$data = array(
		// array('Photocase', 'photocase'),
		// array('Meiré Meiré', 'meire-meire'),
		// array('Damian Franzen', 'damian-franzen'),
		
		array('WeSC', 'wesc'),
		array('Sootfreecities.eu', 'sootfreecities'),
		array('Berliner Gazette', 'berlinergazette'),
		array('Horrorblog', 'horrorblog'),
		array('Kunstmeile Hamburg', 'kunstmeile-hamburg'),
		array('Berlinelektro', 'berlinelektro'),
		array('Harrison', 'harrison'),
		array('Franklin', 'franklin'),
		
		array('Weinmeister Hotel', 'the-weinmeister', true),
		array('Designhotel Elephant Prag', 'designhotel-elephant', true),
		array('DITT', 'ditt-atlas', true),
		array('Moviepilot Techblog', 'moviepilot-techblog', true),
		array('Escapio', 'escapio', true),
		array('Tripsbytips', 'tripsbytips', true),
		array('Metallice Tribute', 'metallicatribute', true),
		array('Supermarktcheck', 'supermarktcheck', true),
		array('Mongrelnation', 'mongrelnation', true),
		array('Susanne Paschke', 'susanne-paschke', true),
		array('StudioAM', 'studio-am', true),
		array('Grueezi', 'grueezi', true),
		array('Lumisol', 'lumisol', true),
		array('Kühlmann', 'kuehlmann', true),
		array('Ingo Robin', 'ingo-robin', true),
		array('PIV Berlin', 'piv-berlin', true),
		array('Peter Arold', 'peter-arold', true),
		array('CSN Metals', 'csn-metals', true),
		array('Superpositioners', 'superpositioners', true),
		array('Cazal Eyewear', 'cazal', true),
		array('Alpenglühn', 'alpengluehn', true),
		array('Erstererster', 'erstererster', true),
		array('Junge Wilde Digitale', 'junge-wilde-digitale', true),
		array('F1RST FINANE Intranet', 'f1rst-finance-intranet', true),
		array('Pro-Votum', 'pro-votum', true),
		array('Whitelabel', 'whitelabel', true),
		array('Mirja Schellbach', 'mirja-schellbach', true),
		array('Design Made in Germany', 'design-made-in-germany', true),
		array('Spatium', 'spatium', true),
	);
	foreach($data as $entry) {
		$title = $entry[0];
		$pagename = $entry[1];
		$archived = @$entry[2];
		?>
		<li>
			<a href="<?= $Router->page(array('path' => 'work/'.$entry[1])); ?>">
				<?= $title; ?>
				<img src="<?= $Router->root(); ?>/images/work/<?= $pagename ?>/thumb.jpg" border="0" alt="<?= $pagename; ?>">
			</a>
		</li>
		<?php
	}
	?>
</ul>
<?php

/*
 * 
## Illustration

* [NOVUM Cover](<?= $Router->page(array('path' => 'work/novum-cover')); ?>)
* [Exihibition 2006](<?= $Router->page(array('path' => 'work/exhibition-2006')); ?>)
* [Fake Magaine](<?= $Router->page(array('path' => 'work/fake-magazine')); ?>)
* [Laura](<?= $Router->page(array('path' => 'work/laura')); ?>)
* [New Series](<?= $Router->page(array('path' => 'work/new-series')); ?>)
* [Mex Cover](<?= $Router->page(array('path' => 'work/mex-cover')); ?>)
* [Freewave](<?= $Router->page(array('path' => 'work/freewave')); ?>)
* [BZ Kulturpreis 2004](<?= $Router->page(array('path' => 'work/bz-kulturpreis')); ?>)
* [Woman’s Glance](<?= $Router->page(array('path' => 'work/womans-glance')); ?>)
* [3+1](<?= $Router->page(array('path' => 'work/three-plus-one')); ?>)
* [selfportraits](<?= $Router->page(array('path' => 'work/selfportraits')); ?>)
* [various colors](<?= $Router->page(array('path' => 'work/various-colors')); ?>)
* [various women](<?= $Router->page(array('path' => 'work/various-women')); ?>)
* [abstract](<?= $Router->page(array('path' => 'work/abstract')); ?>)
* [various b/w](<?= $Router->page(array('path' => 'work/various-bw')); ?>)

# Archive */