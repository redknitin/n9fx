<?php
//N9 MVC Framework

//Controller must be in the root dir; mod_redirect performs routing
//Controller classname must be {Entity}Controller
//Controller filename must be {Entity}Controller.php
//Model classname must be {Entity}Model
//Model filename must be model/{Entity}Model.php
//View filename must be view/{Entity}View_{action}.php
//index, edit, save, delete actions

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
		call_user_func([$this, $this->action]);
		if ($this->action == 'save' || $this->action == 'delete') {
			if ($this->respond_redirect)
				header('Location: '.$this->entityName().'Controller.php');
		} else {
			if ($this->respond_view)
				include('views/'.$this->entityName().'View_'.$this->action.'.php');
		}
	}
}

class DbController extends Controller {
	public function __construct() {
		parent::__construct();
		$this->connect_db();
	}

	public function __destruct() {
		$this->close_db();
		//parent::__destruct(); //it doesn't have a destructor (yet!)
	}

	protected function connect_db() {
		//@mysql_connect($db_host, $db_user, $db_pass);
		//mysql_select_db($db_name);
	}

	protected function close_db() {
		//mysql_close();
	}
}

