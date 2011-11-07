title: Cazal Eyewear
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-23
technologies:
  - Flash
  - PHP

# <?= $pageTitle; ?>

* [http://www.cazal-eyewear.com/](http://www.cazal-eyewear.com/)
* April – Juni 2008
* <?= implode(', ', $technologies); ?>  

Zusammen mit [Conny Neumair](http://www.vcap117.de/) erstellte ich gegen Ende 2006 diese 3-sprachige Full-Flash Website für CAZAL Eyewear.
Über einen Kundenlogin der Zugangsdaten können sich Kunden von CAZAL einloggen und Daten über neue Kollektionen herunterladen.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/cazal/*.jpg')); ?>