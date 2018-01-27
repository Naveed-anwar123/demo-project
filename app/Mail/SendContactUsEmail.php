<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\HttpFoundation\Request;

class SendContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public $request;

    public function __construct($user , $request)
    {
        //
        $this->user = $user;
        $this->request = $request;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $address = $this->request->input('email');
        $name =  $this->request->input('fname') .' '.$this->request->input('lname');;
        $subject = $this->request->input('subject');
        $message = $this->request->input('message');

        return $this->view('contactUsEmailFormat')
            ->from($address, $name)
            ->subject($subject);

    }
}
