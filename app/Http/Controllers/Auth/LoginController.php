<?php

namespace App\Http\Controllers\Auth;

// Models
use App\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

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
        }
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
    public function login(Request $request)
    {
        $this->validateLogin($request);
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        $user = User::where('code', request('code'))->first();
        $role = request('role');
        if ($user && $user->hasRoleAvailable($role)) {
            $roleAux = $user->roles()->where('name', $role)->first();
            $request->session()->put('role_session', $roleAux); // CREAR SESIÓN //
            if ($this->attemptLogin($request)) {
                DB::update('update role_users set active = 1 where user_id =' . $user->id . ' AND role_id =' . $roleAux->id);
                return $this->sendLoginResponse($request);
            }
            $this->incrementLoginAttempts($request);
            return $this->sendFailedLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request)
        );
    }
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect()->intended($this->redirectPath());
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
    public function logout(Request $request)
    {
        $aux = request()->session()->get('role_session');
        User::find(Auth::user()->id)->roles()->where('role_id', $aux->id)->update(['active' => 0]);
        // if (request('role')) {
        //     $role = Role::where('name', request('role'))->first();
        // }
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($response = $this->loggedOut($request)) {
            return $response;
        }
        return $request->wantsJson()
            ? new Response('', 204)
            : redirect()->route('showLogin');
    }
    protected function loggedOut(Request $request)
    {
        //
    }
    protected function redirectTo()
    {
        $aux = request()->session()->get('role_session');
        $role = strtolower($aux->name);
        return $role . '/inicio';
    }
    public function username()
    {
        return 'code';
    }
    protected function guard()
    {
        return Auth::guard();
    }
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
