<?php

class HomeController extends BaseController {

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