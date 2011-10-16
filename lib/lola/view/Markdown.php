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
		$PHPRenderer->view = $this->view;
		$PHPRenderer->extension = $this->extension;
		$rendered = $PHPRenderer->render($filename, $data);
		$parser = new \MarkdownExtra_Parser();
		$content = parent::render($filename, $data);
		// strip metadata
		$metadataEnd = strpos($content, "\n\n");
		if ($metadataEnd > 0) {
			$content = substr($content, $metadataEnd);
		}
		// render markdown
		$rendered = $parser->transform($content);
		return $rendered;
	}
	
	public function metadata($filename)
	{
		$filename = APP_ROOT.DIRECTORY_SEPARATOR.'view/page/'.$this->filename($filename.'.html');
		$contents = file_get_contents($filename);
		$metadata = substr($contents, 0, strpos($contents, "\n\n"));
		// parse meta data
		if (!class_exists('sfYaml')) {
			require LIB_DIR.'/php-yaml/lib/sfYaml.php';
		}
		$yaml = new \sfYaml();
		$data = $yaml->load($metadata);
		return $data ?: array();
	}
}