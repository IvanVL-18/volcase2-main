<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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

     protected function redirectTo()
    {
        $user = Auth::user();
        if ($user->rol === 'Trabajador') {
            //return RouteServiceProvider::HOME;
            return route('trabajador.index');

        }
        else if($user->rol === 'Administrador'){//tiene que salir una ventana que le muestre todos los users
            //return RouteServiceProvider::HOME;
            return route('trabajo.index');
            
        }
        
        //$redirectTo = RouteServiceProvider::HOME;
    } 
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
