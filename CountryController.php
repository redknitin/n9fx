<?php
require_once 'config.php';
//require_once 'n9fx/BaseControllers.php';
require_once 'vendor/autoload.php';

//include 'model/country.php';

class CountryController extends \n9fx\Controller {
	public function index() {
		header('Content-Type: text/plain');
		$this->respond_redirect = $this->respond_view = FALSE;
		echo 'TADA';
	}

	public function save() {
	}

	public function delete() {
	}

	public function edit() {
		echo 'TODO';
	}
}

$c=new CountryController();
$c->process();