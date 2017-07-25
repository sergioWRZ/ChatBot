<?php

use Illuminate\Database\Seeder;

class ParaleloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      \App\Paralelo::create(['descripcion' => 'Curso A']);
      \App\Paralelo::create(['descripcion' => 'Curso B']);
      \App\Paralelo::create(['descripcion' => 'Curso C']);
      \App\Paralelo::create(['descripcion' => 'Curso D']);
      \App\Paralelo::create(['descripcion' => 'Curso E']);
      \App\Paralelo::create(['descripcion' => 'Curso F']);

    }
}
