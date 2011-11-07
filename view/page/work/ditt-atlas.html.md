title: DITT Technologieatlas
author: Marcel Eichner
date: 2011-10-23
technologies: 
  - PHP 5.3
  - CSS
  - HTML
  - CMS
  - Javascript

# <?= $pageTitle ?>

* [http://www.ditt.de/atlas/de/](http://www.ditt.de/atlas/de/)
* Februar – März 2010
* Auftraggeber: elementar mediadesign GmbH
* <?= implode(', ', $technologies); ?>  

Javascript Karte
Detailseiten
statische Offline Generierung CD-ROM

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/ditt-atlas/*.jpg')); ?>