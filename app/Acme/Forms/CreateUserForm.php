<?php  namespace Acme\Forms; 

use Laracasts\Validation\FormValidator;

class CreateUserForm extends FormValidator {

    protected $rules = [
        'email' => 'required|email'
    ];

} 