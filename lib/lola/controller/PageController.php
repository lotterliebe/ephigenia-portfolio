<?php

namespace lola\controller;

class PageController extends \ephFrame\core\Controller
{
	public function show()
	{
		$path = $this->params['path'];
		$this->action = $path;
		$this->view->renderer['view'] = new \lola\view\Markdown();
	}
	
	public function index()
	{

	}
}