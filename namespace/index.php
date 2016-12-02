<?php 
// require_once 'vendor/john/Database.php';
// require_once 'vendor/john/Form.php';
// require_once 'vendor/john/Form/Validator.php';
// require_once 'vendor/peter/Database.php';

spl_autoload_register(function ($name) {
// 	var_dump($name);
// echo "vendor".DIRECTORY_SEPARATOR.(str_replace("\\",DIRECTORY_SEPARATOR,$name)).".php";
require_once "vendor".DIRECTORY_SEPARATOR.(str_replace("\\",DIRECTORY_SEPARATOR,$name)).".php";
});

use john\Database as johnDB;
use peter\Database as Database;

new johnDB();
new database();

new john\Database();
new peter\Database();

// echo john\DOG;
// echo peter\DOG;

// john\hello();
new john\Form();
// new Validator();