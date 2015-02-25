<?php  namespace Acme\Mailers;

use User;

class UserMailer extends Mailer
{

    /**
     * @param User $user
     */
    public function sendConfirmationMessage(User $user)
    {
        $subject = 'Welcome to USPF Center for Research';
        $view = 'emails.registration.confirm';

        $data = [
            'activation_code' => $user->activation_code
        ];

        return $this->sendTo($user, $subject, $view, $data);
    }

} 