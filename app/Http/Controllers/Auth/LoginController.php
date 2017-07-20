<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;


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

    /**
    FACEBOOK LOGIN FUNCTIONS
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */


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
       try
       {
        $socialUser = Socialite::driver('facebook')->user();
    }
    catch (\Exception $e)
    {
        return redirect('/');
    }



    $user = User::where('facebook_id',$socialUser->getId())->first();
    if(!$user)
        User::create([
         'facebook_id' => $socialUser->getId(),
         'name' => $socialUser->getName(),
         'email' => $socialUser->getEmail(),
         ]);
    auth()->login($user);
    return redirect()->to('/home');

    //return $user->getEmail();
}
}
