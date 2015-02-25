<?php

use Acme\Forms\CreateUserForm;
use Acme\Mailers\UserMailer;

class UsersController extends BaseAdminController {

    private $mailer;
    private $createUserForm;

    function __construct(CreateUserForm $createUserForm, UserMailer $mailer)
    {
        $this->mailer = $mailer;
        $this->createUserForm = $createUserForm;
    }

    /**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('layouts.admin.users.users')->with('table', 'Users');
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
        $formData = Input::only('email');

        $this->createUserForm->validate($formData);

        $formData['activation_code'] = str_random(10);

        $user = User::create($formData);

        if($user)
        {
            $this->mailer->sendConfirmationMessage($user);
            Flash::message('User Successfully Created!');
            return Redirect::back();
        }

    }

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}