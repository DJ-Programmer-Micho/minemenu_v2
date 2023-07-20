<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function login(Request $request){
        $credintials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt($credintials)){
            $user_role=Auth::user()->role;

            switch($user_role){
                case 1:
                    return redirect('/met');
                    break;
                case 2:
                    return redirect('/admin');
                    break;
                case 3:
                    return redirect('/rest');
                    break;
                case 4:
                    return redirect('/emp');
                    break;
                default:
                    Auth::logout();
                    return redirect('/login')->with('error','oops!, Something went wrong');
            }
        } else {
            return redirect('login');
        }
    }
}
