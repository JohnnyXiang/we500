<?php
namespace john; 
class Form{
	public function __construct(){
		echo __CLASS__."<br/>";
		
		new Form\Validator();
	}
}