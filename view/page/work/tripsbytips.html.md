title: Tripsbytips
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-18
technologies:
  - PHP
  - CakePHP

# <?= $pageTitle; ?>

* [http://www.tripsbytips.de](http://www.tripsbytips.de)
* 2007
* <?= implode(', ', $technologies); ?>  

Gemeinsam mit zwei anderen Programmierern konnten wir innerhalb von 4 Monaten
eine komplette Online-Community aufbauen. Die Website, die sich rund ums
Reisen dreht, ist mittlerweile mit einer zweiten Version online.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/tripsbytips/*.jpg')); ?>