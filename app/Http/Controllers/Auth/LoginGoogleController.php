<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginGoogleController extends Controller
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
    protected $redirectTo = '/chat';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('google')->user();

//        dd($userSocial->user);

        //check if user exists and log user in
        $user = User::where('email',$userSocial->user['email'])->first();

        if($user){
            if(Auth::loginUsingId($user->id)){
                return redirect()->route('user_search');
            }
        }

        // else sign the user up

        $usersignup = User::create([
            "name"=>$userSocial->user['name'],
            "email"=>$userSocial->user['email'],
            "password"=>bcrypt("1234"),
            "user_type"=> 2,
//            "user_image"=>$userSocial->user['picture'],
//            "facebook_profile"=>$userSocial->user['link'],
//            "gender"=>$userSocial->user['gender'],
        ]);

        // finally log the user in
        if($usersignup){
            if(Auth::loginUsingId($usersignup->id)){
                return redirect()->route('user_search');
            }
        }
    }
}
