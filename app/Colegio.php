<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
  private $publico = '1';   private $privado = '2';   private $convenio = '3';
  private $beni = '1';      private $chuquisaca ='2'; private $cochabamba ='3';
  private $santa_cruz ='4'; private $la_paz ='5';     private $oruro ='6';
  private $pando ='7';      private $potosi ='8';     private $tarija ='9';

  protected $table = 'colegio';

  protected $fillable = [
    'codigo_seduca',
    'nombre',
    'ubicacion',
    'ciudad',
    'departamento',
    'telefono',
    'tipo_colegio',
    'director',
    'visible'
  ];

  public $timestamps = true;

  public function scope_crearColegio($query, $id, $data)
  {
    $this->create([
      'codigo_seduca' => $data['codigo_seduca'],
      'nombre' => $data['nombre'],
      'ubicacion' => $data['ubicacion'],
      'ciudad' => $data['ciudad'],
      'departamento' => $data['departamento'],
      'telefono' => $data['telefonoc'],
      'tipo_colegio' => $data['tipo_colegio'],
      'director' => $id,
      'visible' => '1'
    ]);
  }
}
