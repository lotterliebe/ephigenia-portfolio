title: Tribute to Metallica
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-23
technologies:
  - PHP
  - XHTML
  - CSS

# <?= $pageTitle; ?>

* [http://www.tribute-to-metallica.de/](http://www.tribute-to-metallica.de/)
* Juli 2008
* Auftraggeber: [Schumann Combo](http://schumanncombo.com/) / Universal Music
* <?= implode(', ', $technologies); ?>  

Im Auftrag der Schumann Combo habe ich im Juli 2008 diese Minisite zum <q>German
Tribute to Metallica</q> in XHTML/CSS programmiert. Automatisch wurden jede
Woche Videos von Cover-Versionen bekannter Metallica-Songs auf der Seite
vorgestellt.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/metallicatribute/*.jpg')); ?>