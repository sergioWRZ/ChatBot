<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'roll_id', 'persona_id', 'visible','director'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

  public function scope_crearUser($query, array $data, $id)
  {
    return $this->create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
      'roll_id' => $data['roll_id'],
      'persona_id' => $id,
      'visible' => '1'
    ]);
  }
}
