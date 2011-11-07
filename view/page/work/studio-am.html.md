title: Studio AM
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-18
technologies:
  - PHP4
  - CMS
  - HTML
  - jQuery
  - Javascript

# <?= $pageTitle; ?>

* [http://www.studioam-berlin.com](http://www.studioam-berlin.com)
* Februar – März 2009
* <?= implode(', ', $technologies); ?>  

Für das Architekturbüro StudioAM habe ich diese dreisprachige Internetseite entwickelt in der sich über ein CMS (Content-Management-System) alle Inhalte, also Bilder und Texte komplett editieren lassen.
In Verbindung mit der Java-Script Bibliothek jQuery konnte ich auch eine Bildergallerie entwickeln welche sehr sanfte Übergänge ermöglicht.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/studio-am/*.jpg')); ?>