<?php
require_once 'config.php';
require_once 'inc/BaseControllers.php';

//include 'model/country.php';

class FxUtility {

}

class CountryController extends DbController {
	public function index() {
		header('Content-Type: text/plain');
		$this->respond_redirect = $this->respond_view = FALSE;

		// $rset = mysql_query('select * from user');

		// $user_arr = [];
		// while($iter_obj = mysql_fetch_object($rset, 'User')) {
		// 	$user_arr[] = $iter_obj;
		// }

		// //$usr = new User();
		// $data = [
		// 	'users' => $user_arr
		// ];

		// include 'view/user_list.php';
	}

	public function save() {
		// $usr = new User;
		// foreach($_POST as $key=>$val) $usr->$key=$val;
		
		// if (isset($_GET['username'])) {
		// 	$sql = "update user set display_name='$usr->display_name', email='$usr->email', phone='$usr->phone'".($usr->password?", password=$usr->password":'')." where username='$usr->username'";
		// } else {
		// 	$sql = "insert into user(display_name, username, password, email, phone) values('$usr->display_name', '$usr->username', '$usr->password', '$usr->email', '$usr->phone')";
		// }
		
		// mysql_query($sql);
		
		// header('Location: user_controller.php');
	}

	public function delete() {
		// $username = $_POST['username'];

		// $rset = mysql_query("delete from user where username='$username'");
		
		// header('Location: user_controller.php');
	}

	public function edit() {
		// if (isset($_GET['username'])) {
		// 	$username = $_GET['username'];
			
		// 	$rset = mysql_query("select display_name, username, email, phone from user where username='$username'");
		// 	$usr = mysql_fetch_object($rset, 'User');
		// }
		
		// include 'view/user_edit.php';		
	}
}

$c=new CountryController();
$c->process();