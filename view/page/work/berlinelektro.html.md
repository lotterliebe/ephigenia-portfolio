title: Berlin Elektro
author: Marcel Eichner
date: 2011-10-13
technologies: 
  - HTML
  - CSS
  - SASS
  - Compass

# <?= $pageTitle ?>

* [http://www.berlinelektro.de](http://www.berlinelektro.de)
* 2009 – 2011
* Auftraggeber: elementar mediadesign GmbH, Berlin Elektro
* <?= implode(', ', $technologies); ?>  

Berlin Elektro ist ein berliner Unternehmen das deutschlandweit weisse Ware verkauft.
Die Shop Software wurde vom Kunden selbst entwickelt und man entschied sich
Anfang 2011 für einen Relaunch der auch eine umgestaltung des Frontends beinhalten sollte.

Für das berliner Unternehmen Berlin Elektro setzte ich die von elementar 
mediadesign gmbh erstellten designs in HTML und CSS um. Das besondere bei
diesem Projekt ist, dass die CSS Dateien mit Compass bzw. Sass erzeugt wurden
welches es ermöglichte in wenigen Arbeitsstunden den Look der Websites an 
die zwei anderen Shop-Frontends, welche sich nur marginal unterscheiden,
anzupassen.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/berlinelektro/*.jpg')); ?>