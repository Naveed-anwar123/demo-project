<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      //$user = User::where('referral_by', '=' , Auth::user()->affiliate_id)->get();
//1- Get all posts of user

       //$user = User::find(2)->posts()->where('title', '=','t')->get();
       //dd($user);


       // $post = new Post(['title'=>'t','content'=>'c']);
   //  $post = new Post;
   //  $post->title= 'ti';
     //   $post->content = 'co';
        $user = User::findOrFail(2);
   //       $user->posts()->save($post);    //Add new Post related to user
   //      $user->posts()->where('title','=','ti')->update(['title'=>'updated']); // Update a post of this user with condition
         $p = $user->posts;
        foreach(Collection::make($p) as $model){
        //    dd($model->withTrashed()->get());
         //   dd($model->onlyTrashed()->get());
        }

//        foreach(Collection::make($p) as $model){
//            dd($model->delete());
//        }
//        if($p){
//            Collection::make($p)->delete();
//        }

   //      dd($user->posts->where('id','=','5'));

//resore()


        //dd(Collection::make($user));


//2-









//      foreach (Collection::make($user) as $model)
//        {
//         echo $model->email;
//            echo "<br>";
//        }



    // return view('home',compact('user'));

        $role = Role::findOrFail(1);
        //dd($role->id);
        $user = User::findOrFail(2);
        //$user->roles()->attach($role->id);
        //$user->roles()->attach(2);
       // $user->roles()->detach(1);

        foreach(Collection::make($user->roles) as $md){
            echo $md->responsibility;
            echo "<br>";
        }










    }
}
