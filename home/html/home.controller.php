<?php

Class HomeController extends LesliController {

	public function __construct($container){

		parent::__construct($container);

	}

	public function get($request, $response, $params){

		$data = ['data'=>['logos'=>['shutiando', 'finca', 'hrconnectp', 'pizzacode']]];

		return $this->view->render($response, $this->template->section(), $data);

	}

}