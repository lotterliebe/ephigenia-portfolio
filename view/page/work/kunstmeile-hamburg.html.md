---
title: Kunstmeile Hamburg
author: Marcel Eichner
date: 2011-10-13
technologies:
  - PHP
  - ephFrame
  - XHTML
  - CSS
  - Google Maps
  - CMS
  - Javascript
---

# <?= $pageTitle ?>

* [http://www.kunstmeile-hamburg.de](http://www.kunstmeile-hamburg.de)
* August 2010 – Dezember 2010
* Auftraggeber: [TheGreenEyl](http://www.thegreeneyl.com/)
* <?= implode(', ', $technologies); ?>  

Die Kunstmeile Hamburg ist ein Zusammenschluss der bekanntesten hamburger
Museen für Kunst welche auf der neuen Website gesammelt ihre Austellungen
und Aktionen vorstellen und bewerben können. In einem Veranstaltungskalender
kann man Events und Austellungen eintragen. Auf einer Karte die nicht mit dem
standard Kartenmaterial, sondern vom Kunden geliefertem ausgestattet ist sieht
man den Ort der jeweiligen Museen.

Im Auftrag von TheGreenEyl setzte ich auf Grundlage eines Designs die komplette
Website um. Dazu erstellte ich Templates in HTML und CSS und integrierte diese
in eine anpepasste Version des Harrison Content Management Systems welches
von Mitarbeiter der Museen geplegt wird.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/kunstmeile-hamburg/*.jpg')); ?>