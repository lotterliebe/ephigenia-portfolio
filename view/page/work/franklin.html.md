---
title: Franklin
author: Marcel Eichner
date: 2011-10-13
technologies: 
  - PHP 5
  - CSS
  - HTML
  - Cron-Job
---

# <?= $pageTitle ?>

* [https://github.com/Ephigenia/franklin](https://github.com/Ephigenia/franklin)
* 2010
* <?= implode(', ', $technologies); ?>  

Franklin ist ein open source software projekt welches von mir 2009 initiert wurde und
seit dem immer mehr Zuspruch und Anwendnung vor allem bei SEO Experten findet. Ist die
software in wenigen Schritten eingerichtet erhält man ein an seine Bedürfnisse angepassetes
Dashboard welches den Zeitlichen verlauf von zum Beispiel der Anzahl Fans auf Facebook,
Twitter-Follower oder RSS-Lesern anzeigt. So kann man Rückschlüsse über den Erfolg von 
Kampagnen und Aktionen ziehen und spart sich das mühsame zusammensuchen der Kennzahlen.

Eine ständige Weiterentwicklung des Projekts und die Erweiterung mit neuen Tests welche
neue Kennzahlen zur Verfügung stellen sind auch super.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/franklin/*.jpg')); ?>