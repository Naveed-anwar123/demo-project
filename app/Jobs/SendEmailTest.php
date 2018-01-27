<?php

namespace App\Jobs;

use App\Mail\SendContactUsEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendEmailTest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $user;
    protected $request;

    public function __construct($requests)
    {
        //
        //$user=$users;
        $this->request= $requests;


    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //dd('done');
        Mail::to('naveedanwar152@gmail.com')->send(new SendContactUsEmail(Auth::user() , $this->request ));
       // Mail::to('naveedanwar152@gmail.com')->send(new \App\Mail\SendContactUsEmail(Auth::user() , Request::capture() ));
        //$email = new SendEmailTestMail();
        //Mail::to($this->details['email'])->send($email);
    }

}
