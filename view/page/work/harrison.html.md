---
title: Harrison CMS
author: Marcel Eichner
date: 2011-10-13
technologies: 
  - PHP 5
  - CSS
  - HTML
---

# <?= $pageTitle ?>

* [https://github.com/Ephigenia/harrison](https://github.com/Ephigenia/harrison)
* Juni 2010 – heute
* <?= implode(', ', $technologies); ?>  

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/harrison/*.jpg')); ?>