# n9fx

The N9 framework is an light-weight opinionated MVC framework for PHP.

# Getting Started

Create a composer.json file in your project directory with the following content

    {
    	"repositories": [
    		{
    			"type": "vcs",
    			"url": "https://github.com/redknitin/n9fx"
    		}
    	],
    	"require": {
    		"redknitin/n9fx": "*@dev"
    	}
    }

Then, run "composer install".

Within your source code, add a "require_once 'vendor/autoload.php';" and create your controller class by extending \n9fx\Controller. Then, instantiate the controller and add the process method. The following is a sample controller.

    <?php
    require_once 'config.php';
    require_once 'vendor/autoload.php';
    
    class CountryController extends \n9fx\Controller {
    	public function index() {
		    header('Content-Type: text/plain'); //We want to toss some text at the browser
    		$this->respond_redirect = $this->respond_view = FALSE; //No view loading or redirection
    		echo 'TADA'; //Display this text
    	}
    
      public function save() {
		    //TODO';
	    }
    
      public function delete() {
    		//TODO';
    	}
    
    	public function edit() {
    		//TODO';
    	}
    }

    $c=new CountryController();
    $c->process();

# Notes

* Controller must be in the root dir; use mod_redirect to perform routing
* Controller classname must be {Entity}Controller
* Controller filename must be {Entity}Controller.php
* Model classname must be {Entity}Model
* Model filename must (ideally) be model/{Entity}Model.php
* View filename must be view/{Entity}View_{action}.php
* index, edit, save, delete actions
