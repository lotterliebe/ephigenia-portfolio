title: Superpositioners
author: [Marcel Eichner](love@ephigenia.de)
date: 2011-10-23
technologies:
  - PHP4
  - XHTML
  - GD-Lib

# <?= $pageTitle; ?>

* [http://www.csnmetals.de](http://www.csnmetals.de)
* Frühjar 2007
* <?= implode(', ', $technologies); ?>  

Für das Künstlerkollektiv Superpositioners programmierte ich 2006 das Online-Portfolio das wie ein Dateibrowser funktioniert.
Über FTP werden Inhalte wie Texte, Videos, Bilder und Ordner organisiert und die Internetseite gibt diese dann nur noch aus.

<?= $this->view->render('element', 'imagelist', array('glob' => 'images/work/superpositioners/*.jpg')); ?>