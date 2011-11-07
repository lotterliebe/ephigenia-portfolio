title: Mongrel Nation
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-23
technologies:
  - PHP
  - XHTML
  - CSS
  - CMS
  - PHP

# <?= $pageTitle; ?>

* [http://www.mongrelnation.com](http://www.mongrelnation.com)
* Januar – März 2009
* <?= implode(', ', $technologies); ?>  

Für die Berlinerin Maiko Gubler alias Mongrelnation entstand Ende 2008 im
Auftrag von Nomoresleep™ dieses Online-Portfolio auf Grundlage von Maikos
Design- und Konzeptvorgaben. Im Blog veröffentlicht Maiko ihre neuesten
Arbeiten. In den Projektlisten werden ihre bisherigen Videos und
Illustrationen gezeigt. Über ein CMS-System können alle Bilder, Videos und
Texte editiert werden.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/mongrelnation/*.jpg')); ?>