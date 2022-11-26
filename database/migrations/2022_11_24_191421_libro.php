<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('libro',function(Blueprint $table){
            $table ->id();
            $table -> string('nombre');
            $table -> string('autor');
            $table -> string('genero');
            $table -> integer('paginas');
            $table -> unsignedBigInteger('proovedor_id');
            $table -> foreign('proovedor_id')-> references('id')->on('proovedor')->onDelete("cascade");
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
