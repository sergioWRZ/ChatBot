<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
  protected $table = 'persona';

  protected $fillable =[
    'nombres', 'apellidos', 'celular', 'fecha_nacimiento'
  ];

  public $timestamps = true;

  public function scope_crearPersona($query, array $data)
  {
    $this->create([
      'nombres' => $data['nombres'],
      'apellidos' => $data['apellidos'],
      'celular' => $data['celular'],
      'fecha_nacimiento' => $data['fecha_nacimiento'],
    ]);
    $lastId = $this->all()->last()->id;
    return $lastId;
  }

  public function setFechaNacimientoAttribute($value)
  {
    $this->attributes['fecha_nacimiento'] = Carbon::parse($value);
  }
}
