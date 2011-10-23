<?php
$images = glob($glob);
foreach($images as $filename) {
	if (basename($filename) == 'thumb.jpg') continue;
	echo '<img src="'.$Router->root().'/'.$filename.'">';
}