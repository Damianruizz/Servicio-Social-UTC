<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Company;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests;

class Users extends Controller
{
    public function index()
    {
      $companies = Company::all();
      return View::make("welcome", array("companies" => $companies));
    }

    public function welcome()
    {
        //Aqui se muestra el listado de usuarios al Administrador y se da la opcion para hacer el crud
        // al administrador con mayor jerarquia
        if(Auth::check()){
            $user = Auth::user();
            $users = User::all();
            //return dd($user);
            return View::make("users/hello", array("users" => $users, "user" => $user));
        }
    }
    
    public function create()
    {
        //Crear usuarios
        if(Auth::check()){
            //return dd($user);
            return view('users/create');
        }
    }

    public function store(Request $request)
    {
        $data = [
            'name' => Input::get('name'),
            'password' => Input::get('password'),
            'username' => Input::get('user')
        ];
        $input = $request->all();
     
        User::create([
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'username' => $data['username'],
        ]);

        $user = Auth::user();
        $users = User::all();
     
        return View::make("users/hello", array("users" => $users, "user" => $user));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
     
        return view('users/edit')->withUser($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $input = $request->all();

        //Encriptando la contraseña
        $password = bcrypt(Input::get('password'));

        $user->name = Input::get('name');
        $user->password = $password;
        $user->username = Input::get('user');

        $user->save();

        $user = Auth::user();
        $users = User::all();

        return View::make("users/hello", array("users" => $users, "user" => $user));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        $user = Auth::user();
        $users = User::all();

        return View::make("users/hello", array("users" => $users, "user" => $user));
    }
}