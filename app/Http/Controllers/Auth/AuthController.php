<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use Illuminate\Routing\Controller;
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
    

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('guest', ['except' => 'getLogout']);
    }
   public function fnc_ingresar()
    {
       
      $nombre_usuario = Input::get('nombre_usuario');
      $password = Input::get('password');
      
    if (Auth::attempt(['nombre_usuario' => $nombre_usuario, 'password' => $password]))
      
      {
        return redirect('/principal');
    }
    
        return redirect('/');
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
            'nombre_usuario' => 'required|max:25',          
            'password' => 'required|confirmed|min:8',
        ]);
    }
    public function fnc_salir()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return usuario_app::create([
            'nombre_usuario' => $data['nombre_usuario'],
            'password' =>bcrypt($data['password']),
        ]);
    }
}
