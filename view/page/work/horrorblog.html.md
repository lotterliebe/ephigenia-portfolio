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

<div class="text" markdown="1">
Pressevorführungen, Verlosungen, Kontakt zu Verleih und Produktion (international), Interaktion auf Facebook/Twitter, Social Media Organisation,
Praktikanten!!

Das Horrorblog enstand aus einem privaten Hobby von mir und entwickelte sich schnell zu einer erfolgreichen Website die weit mehr benötigt als einen Programmierer der sich um die technischen Belange kümmert.

Durch die ständige Optimierung des Front– und Backend und die Umstellung der Server Software von Apache2 auf NGINX wurde die Performance extrem verbessert.

Im Sommer 2009 entwickelte ich mein CMS und Blogsystem weiter so dass es mir
möglich war dieses Blog rund um Fantasy- und Horrorfilme zu erstellen. Es
bietet alle modernen Möglichkeiten die ein Blog haben muss und man ist immer
über die neuesten Entwicklungen aus Hollywood und anderswo informiert.

40000 Besucher im Monat, NGINX Server, High-Performance, A-Score bei YSlow
</div>

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/horrorblog/*.jpg')); ?>