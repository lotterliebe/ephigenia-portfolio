<?php

namespace lola\controller;

class PageController extends \ephFrame\core\Controller
{
	public function show()
	{
		$path = $this->params['path'];
		if (empty($path)) {
			$path = 'index';
		}
		$this->action = $path;
		$this->view->renderer['view'] = new \lola\view\Markdown();
		
		// metadata
		// --------
		// extract metadata
		// $filename = $this->view->rootPath.'page/'.$path.'.html.md';
		// 		$contents = file_get_contents($filename);
		// 		$metadata = substr($contents, 0, strpos($contents, "\n\n"));
		// 
		// 		// parse meta data
		// 		require LIB_DIR.'/php-yaml/lib/sfYaml.php';
		// 		$yaml = new \sfYaml();
		// 		$value = $yaml->load($metadata);
		// 		var_dump($value);
		// 		die();
		
	}
	
	public function index()
	{

	}
}