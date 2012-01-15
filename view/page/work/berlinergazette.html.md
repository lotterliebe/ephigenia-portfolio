---
title: Berliner Gazette
author: Marcel Eichner
date: 2011-10-13
technologies:
  - Wordpress
  - PHP
  - CSS
  - SASS
  - Compass
  - HTML
  - Hosting
  - Media Queries
---

# <?= $pageTitle ?>

* [http://www.berlinergazette.de](http://www.berlinergazette.de)
* Oktober 2009 – heute
* <?= implode(', ', $technologies); ?>  

Für die Berliner Gazette, ein seit 1999 bestehendes Internet-Feuilleton,
entwickelte ich 2009 den aktualisierten Internetauftritt, der auf der bekannten
Blog-Software [Wordpress](http://www.wordpress.org/) basiert. Ein eigens für die Gazette entwickeltes Theme
ermöglicht es den Redakteuren alle Inhalte der Seite zu bearbeiten – von der
Sidebar bis zum Impressum ist alles editierbar. Außerdem ist die Website als Mobile App auf dem Smartphone ansteuerbar, sodass alle Artikel benutzer- und leserfreundlich dargestellt werden.

Im April 2010 erhielt die Berliner Gazette den [Alternativen Medienpreis in
der Sparte Internet](http://www.alternativer-medienpreis.de/). Die in Deutschland einzigartige Auszeichnung
würdigt "Medienprodukte und Medienschaffende abseits des allgegenwärtigen
Mainstreams".

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/berlinergazette/*.jpg')); ?>