<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function faq()
	{
		return View::make('faq');
	}

	public function iniciarTramite()
	{
		return View::make('iniciar_tramite');
	}

	public function toForm() {
		return View::make('toForm');
	}
	
	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{

		$rules = array(
	    'email'    => 'required|email',
	    'password' => 'required'
	    );

		$messages =  array(

			'email.required'		=> 'El campo "Correo" es requerido',
			'email.email'			=> 'El correo no está en formato correcto',
			'password.required'		=> 'La contraseña es requerida'

			);

		$validator = Validator::make(Input::all(), $rules, $messages);


	    if ($validator->fails())
	    {
	    	return Redirect::to('login')
	    	->withErrors($validator)
	        ->withInput(Input::except('password'));
	    }

	    else
	    {
	    	$userdata = array(
	    		'email'     => Input::get('email'),
	    		'password'  => Input::get('password')
	    		);

	    	if (Auth::attempt($userdata, true))
	    	{
	    		return Redirect::to('admin');
	    	}

	    	else
	    	{
	    		Session::flash('message', 'Error al entrar, verifique datos');
	    		return Redirect::to('login');
	    	}
	    }
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}