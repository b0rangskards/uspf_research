<?php


class UserMailer extends Mailer {

    /**
     * @param User $user
     */
    public function sendConfirmationMessage(User $user)
    {
        $subject = 'Welcome to aidPH';
        $view = 'emails.registration.confirm';

        $data = [
            'activation_code' => $user->activation_code
        ];

        return $this->sendTo($user, $subject, $view, $data);
    }

} 