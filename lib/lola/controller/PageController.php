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
		$this->view->renderer['view'] = $renderer = new \lola\view\Markdown();
		foreach($renderer->metadata($path) as $key => $value) {
			switch(strtolower($key)) {
				case 'title':
					$this->view['pageTitle'] = $value;
					break;
				case 'layout':
					$this->view->layout = $value;
					break;
			}
		}
	}
	
	public function index()
	{

	}
}