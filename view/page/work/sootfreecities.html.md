title: Sootfreecities.eu
author: Marcel Eichner
date: 2011-10-13
technologies:
  - PHP
  - Markdown
  - HTML5
  - CSS
  - SASS
  - Compass


# <?= $pageTitle ?>

* [http://www.sootfreecities.eu](http://www.sootfreecities.eu)
* September 2011
* Auftraggeber: Susanne Paschke, [BUND e.V.](http://www.bund.net/)
* <?= implode(', ', $technologies); ?>  

Auf der Website [http://www.sootfreecities.eu](http://www.sootfreecities.eu)
wird eine Kampagne der Europäischen Union dargestellt die die Vor- und
Nachteile von verschiedenen europäischen Städten zeigt.

Verschiedenen Gesichtspunkte pro Stadt werden auf einer interaktiven Karte
dargestellt … dann gibt’s noch eine Tabelle mit den verschiedenen Noten …

Für den [Bund für Umwelt und Naturschutz Deutschland e.V.
(BUND)](http://www.bund.net/) programmierte ich Ende des Sommers 2011 die von
[Susanne Paschke](http://www.vishaka.de) mit dem Verein konzipierte und
gestaltete Website.

Die Website passt sich dank der Verwendung des CSS-Framworks Compass (SASS)
und der einfachen Integration von Media-Queries automatisch an das
Anzeigegerät des Clients an. Die Inhalte werden vom Kunden gepflegt. Der
Einsatz von der [Markdown](http://daringfireball.net/projects/markdown/)
Syntax hat dies ungemein vereinfacht.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/sootfreecities/*.jpg')); ?>