<?php
namespace n9fx;

class Controller {
	protected $action;
	public $data;
	protected $respond_redirect = TRUE;
	protected $respond_view = TRUE;

	public function __construct() {
		$this->action = isset($_GET['action']) ? $_GET['action'] : 'index';		
	}

	public function entityName() {
		return substr(get_class($this), 0, -1*strlen('Controller'));
	}

	public function process() {
		$this->preprocess();
		call_user_func([$this, $this->action]);
		if ($this->action == 'save' || $this->action == 'delete') {
			if ($this->respond_redirect)
				header('Location: '.$this->entityName().'Controller.php');
		} else {
			if ($this->respond_view)
				include('views/'.$this->entityName().'View_'.$this->action.'.php');
		}
		$this->postprocess();
	}

	public function preprocess() {}
	public function postprocess() {}
}