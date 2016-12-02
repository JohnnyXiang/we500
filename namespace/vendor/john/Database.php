<?php
namespace john;

const DOG = "this is john's dog";

class Database{
	public function __construct(){
		echo __CLASS__."<br/>";
		echo DOG."<br/>";
		
		$db = new \PDO('mysql:host=localhost;dbname=we500_demo;charset=utf8mb4', 'root', 'q1w2e3AA');
	}
}



function hello(){
	echo "hello from john<br/>";
}