<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    public function login(Request $request)
    {
        $user = User::where('name', $request->name)->first();
        if(!is_null($user))
        {
            if($user->password === md5($request->password))
            {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('/product')->withSuccess('Login successful!');
            }
            else
                return redirect()->back()->withErrors(
                    [
                        'password' => 'Credenciales incorrectas!'
                    ]
                );
        }    
        else
            return redirect()->back()->withErrors(
                [
                    'name' => 'Email no ha sido registrado!'
                ]
            )->withInput();
    }
}
