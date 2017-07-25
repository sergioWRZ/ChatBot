<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableColegio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegio', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre', 50);
            $table->char('codigo_seduca', 50)->nullable();
            $table->char('tipo_colegio', 1);
            $table->char('telefono', 10)->nullable();
            $table->char('departamento', 20)->nullable();
            $table->char('ciudad', 150)->nullable();
            $table->string('ubicacion')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegio');
    }
}
