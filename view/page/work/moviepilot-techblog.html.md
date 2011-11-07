title: Moviepilot Tech Blog
author: Marcel Eichner
date: 2011-10-23
technologies: 
  - CSS
  - HTML

# <?= $pageTitle ?>

* [http://techblog.moviepilot.com/](http://techblog.moviepilot.com)
* Juli 2010
* Auftraggeber: Moviepilot
* <?= implode(', ', $technologies); ?>  

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/moviepilot-techblog/*.jpg')); ?>