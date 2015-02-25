<?php  namespace Acme\Mailers;

use Illuminate\Support\Facades\Mail;

abstract class Mailer
{

    /**
     * @var
     */
    private $mail;

    /**
     * @param Mail $mail
     */
    function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }


    /**
     * @param $user
     * @param $subject
     * @param $view
     * @param $data
     */
    public function sendTo($user, $subject, $view, array $data = [])
    {
        $this->mail->queue($view, $data, function ($message) use ($user, $subject) {
            $message->to($user->email)
                ->subject($subject);
        });
    }
} 