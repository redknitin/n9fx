# n9fx
N9 Framework

The N9 framework is an light-weight opinionated MVC framework for PHP.

Notes
* Controller must be in the root dir; use mod_redirect to perform routing
* Controller classname must be {Entity}Controller
* Controller filename must be {Entity}Controller.php
* Model classname must be {Entity}Model
* Model filename must (ideally) be model/{Entity}Model.php
* View filename must be view/{Entity}View_{action}.php
* index, edit, save, delete actions
