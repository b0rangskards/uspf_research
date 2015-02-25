<?php

use Acme\Forms\SignInForm;
use Laracasts\Flash\Flash;

class SessionsController extends BaseAdminController {

    /**
     * @var SignInForm
     */
    private $signInForm;

    function __construct(SignInForm $signInForm)
    {
        $this->signInForm = $signInForm;
        $this->beforeFilter('guest', ['except' => 'destroy']);
    }


    /**
	 * Show login page
	 *
	 */
	public function create()
	{
        return View::make('layouts.admin.login');
    }


	/**
	 * Login user
	 * via post request
	 */
	public function store()
	{
        // fetch the form
        // validate the form
        // if invalid then go back
        $formData = Input::only('username', 'password');

        $this->signInForm->validate($formData);

        // if is valid, then try to sign in
        if( ! Auth::attempt($formData))
        {
            Flash::error('Invalid Username/Password.');
            return Redirect::back()->withInput();
        }

        //Flash::message('Welcome back!');
        return Redirect::intended('admin/');
    }

    public function destroy()
    {
        Auth::logout();
        Flash::message('You have now been logged out.');
        return Redirect::route('login');
    }




}
