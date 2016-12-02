<?php
namespace App\Http\Controllers;

class WelcomeController extends Controller {
  	
  	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	*/
	public function indexAction()
	{
		//
		$welcomeMsg = 'Welcome to WE500 Laravel Class!';
		
		return view('welcome.index',['welcomeMsg'=>$welcomeMsg]);

	}

} 
