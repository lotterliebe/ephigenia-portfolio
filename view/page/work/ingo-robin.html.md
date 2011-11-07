title: Ingo Robin
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-23
technologies:
  - PHP4
  - HTML

# <?= $pageTitle; ?>

* [http://www.ingorobin.com/](http://www.ingorobin.com/)
* Juni – Juli 2007
* Auftraggeber: NoMoreSleep
* <?= implode(', ', $technologies); ?>  

Für den Fotografen Ingo Robin entstand gemeinsam mit NoMoreSleep™ eine Full-Flash-Website.
Meine Aufgabe bestand in der Programmierung eines Backends, in dem man verschiedene Fotoalben und Videos für die Seite anlegen kann.

*Bei diesem Projekt besonders interessant:*
Da da die Indizierung von Flash-Seiten für Google immernoch ein Problem darstellt, generiert die Website einen alternativen HTML-Inhalt, der dann durchsuchbar wird.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/ingo-robin/*.jpg')); ?>