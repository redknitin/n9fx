<?php
namespace n9fx;

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