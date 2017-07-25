<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paralelo extends Model
{
  use SoftDeletes;

  protected $table = 'paralelo';

  protected $fillable = ['descripcion'];

}
