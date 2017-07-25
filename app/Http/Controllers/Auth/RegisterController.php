<?php

namespace App\Http\Controllers\Auth;

use App\Colegio;
use App\Persona;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
  
  use RegistersUsers;
  
  protected $redirectTo = '/home';
  
  public function __construct()
  {
    $this->middleware('guest');
  }
  
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => 'required|string|max:255',
      'nombres' => 'required|string|max:50',
      'apellidos' => 'required|string|max:50',
      'email' => 'required|string|email|max:255|unique:users',
      'celular' => 'required|string|max:10',
      'fecha_nacimiento' => 'required',
      'password' => 'required|string|min:6|confirmed',
      'acepto' => 'required',
      'nombre' => 'required|string|max:50',
      'codigo_seduca' => 'required',
      'telefonoc' => 'required|string|max:10',
      'ciudad' => 'required',
      'ubicacion' => 'required'
    ]);
  }
  
  protected function registered(Request $request, $user)
  {
    //algo...
  }
  
  protected function create(array $data)
  {
    $id = Persona::_crearPersona($data);
    Colegio::_crearColegio($id, $data);
    return User::_crearUser($data, $id);
  }
}
