<?php
App::uses('AppController', 'Controller');
/**
 * Post2s Controller
 */
class Post2sController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
//	public $scaffold;

	public function index(){
		$this->autoLayout = true;
		$this->response->disableCache();
	}

}
