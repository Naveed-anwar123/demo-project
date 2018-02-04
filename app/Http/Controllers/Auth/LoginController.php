<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();

    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
      //
       $fbuser = Socialite::driver('facebook')->user();


       $authUser = User::where('facebook_id', $fbuser->getId())->first();
        if($authUser)
        {


            Auth::login($authUser);
            redirect();
        }
      else {

      $user = User::create([
            'facebook_id'   =>  $fbuser->getId(),
            'name'          =>  $fbuser->getName(), //was able to access this
            'email'         =>  str_random().'@gmail.com',  //here is the issue, cant access the email
            'password'      =>  md5('12345'), //also cant access the password
        ]);

        Auth::login($user);

        redirect();
      }
















        // $user->token;
    }
}
