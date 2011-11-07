title: Berlin Elektro
author: Marcel Eichner
date: 2011-10-13
technologies: 
  - HTML
  - CSS
  - SASS
  - Compass

# <?= $pageTitle ?>

* [http://www.berlinelektro.de](http://www.berlinelektro.de)
* 2009 – 2011
* Auftraggeber: elementar mediadesign GmbH, Berlin Elektro
* <?= implode(', ', $technologies); ?>  

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/berlinelektro/*.jpg')); ?>