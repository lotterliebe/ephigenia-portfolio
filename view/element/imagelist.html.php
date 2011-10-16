<?php
$images = glob($glob);
foreach($images as $filename) {
	echo '<img src="'.$Router->root().'/'.$filename.'">';
}