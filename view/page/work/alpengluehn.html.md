title: Alpenglühn
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-23
technologies:
  - Flash
  - PHP

# <?= $pageTitle; ?>

* [http://www.alpengluehn.ch/](http://www.alpengluehn.ch/)
* März 2007
* <?= implode(', ', $technologies); ?>  

Für das Optikerfachgeschäft Alpenglühn aus Zürich setzte ich Ende 2006 diese Website um. Hier kann der Kunde Bilder in Alben sortieren die dann in den Gallerien auftauchen.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/cazal/*.jpg')); ?>