<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use Auth;
use View;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showcreate()
    {
        // Si no hay sesión activa mostramos el formulario
    }

    public function showLogin()
    {
        $companies = Company::all();
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
          return View::make("admin/hello", array("companies" => $companies));
        } else {
          return View::make("welcome", array("companies" => $companies));
        }
        // Si no hay sesión activa mostramos el formulario
    }
 
    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        $companies = Company::all();
        // Verificamos los datos
        if (Auth::attempt($data)) 
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            //return Redirect::intended('admin/hello');
            return View::make("admin/hello", array("companies" => $companies));
        } else {
            return View::make("welcome", array("companies" => $companies));
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
    }
 
    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        $companies = Company::all();
        return View::make("welcome", array("companies" => $companies));
    }

}
