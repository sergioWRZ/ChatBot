<?php

use Illuminate\Database\Seeder;

class TurnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      \App\Turno::create(['descripcion' => 'Mañana']);
      \App\Turno::create(['descripcion' => 'Tarde']);
      \App\Turno::create(['descripcion' => 'Noche']);

    }
}
