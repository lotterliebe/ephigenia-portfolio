title: CSN Metals
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-23
technologies:
  - PHP4
  - XHTML
  - Javascript
  - PDF
  - AJAX

# <?= $pageTitle; ?>

* [http://www.csnmetals.de](http://www.csnmetals.de)
* Frühjar 2007
* <?= implode(', ', $technologies); ?>  

Für den Metallverarbeiter Carl Schreiber Neunkirchen aus Köln war ich Anfang 2007 für die Umsetzung der Seite aus Designvorlagen zuständig.
Mit der Hilfe von AJAX kann man auf der Seite den kompletten Katalog von CSN-Metals durchsuchen und sortieren. Es gibt die Möglichkeit, das Ergebnis als PDF herunterzuladen und auszudrucken.
Außerdem kann der Kunde alle Texte der Seite selbst aktualisieren und die Aktienkurse auf der Startseite werden jeden Tag neu eingelesen.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/csn-metals/*.jpg')); ?>