<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    public function showLogin($user = 'estudiante')
    {
        if (Auth::check()) {
            return redirect()->route($user . '.home');
        } else {
            switch ($user) {
                case 'estudiante':
                    return view('auth.login.estudiante');
                    break;
                case 'docente':
                    return view('auth.login.docente');
                    break;
                case 'director':
                    return view('auth.login.director');
                    break;
                case 'secret':
                    return view('auth.login.admin');
                    break;
                default:
                    return back();
                    break;
            }
        }
    }
}
