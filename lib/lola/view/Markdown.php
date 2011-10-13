<?php

namespace lola\view;

use 
	\ephFrame\view\Renderer
	;

class Markdown extends \ephFrame\view\Renderer
{
	public $extension = 'md';
	
	public function render($filename, Array $data = array())
	{
		if (!class_exists('Markdown_Parser')) {
			define('MARKDOWN_EMPTY_ELEMENT_SUFFIX', '>');
			require LIB_DIR.'/php-markdown/markdown.php';
		}
		// run PHP Compiler first
		$PHPRenderer = new Renderer();
		$PHPRenderer->extension = $this->extension;
		$rendered = $PHPRenderer->render($filename, $data);
		$parser = new \MarkdownExtra_Parser();
		$rendered = $parser->transform(parent::render($filename, $data));
		return $rendered;
	}
}