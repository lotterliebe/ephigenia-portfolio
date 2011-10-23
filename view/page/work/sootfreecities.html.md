title: Sootfreecities.eu
author: Marcel Eichner
date: 2011-10-13
technologies:
  - PHP
  - Markdown
  - HTML5
  - CSS
  - SASS
  - Compass

# <?= $pageTitle ?>

* [http://www.sootfreecities.eu](http://www.sootfreecities.eu)
* September 2011
* <?= implode(', ', $technologies); ?>


<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/sootfreecities/*.jpg')); ?>