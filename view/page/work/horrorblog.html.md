title: Horrorblog
author: Marcel Eichner
date: 2011-10-13
technologies:
  - nginx
  - PHP 5.3
  - ephFrame
  - Harrison
  - HTML5
  - CSS3
  - SASS
  - Compass
  - Media Queries

# <?= $pageTitle ?>

* [http://www.horrorblog.org](http://www.horrorblog.org)
* Juni 2009 – heute
* <?= implode(', ', $technologies); ?>  

Im Sommer 2009 entwickelte ich mein CMS und Blogsystem weiter so dass es mir
möglich war dieses Blog rund um Fantasy- und Horrorfilme zu erstellen. Es
bietet alle modernen Möglichkeiten die ein Blog haben muss und man ist immer
über die neuesten Entwicklungen aus Hollywood und anderswo informiert.

40000 Besucher im Monat, NGINX Server, High-Performance, A-Score bei YSlow

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/horrorblog/*.jpg')); ?>