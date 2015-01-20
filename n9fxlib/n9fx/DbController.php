<?php
namespace n9fx;

require_once 'config.php';

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
		global $db;
		@mysql_connect($db['host'], $db['user'], $db['pass']);
		mysql_select_db($db['name']);
	}

	protected function close_db() {
		mysql_close();
	}
}
