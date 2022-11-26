<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prestamo',function(Blueprint $table){
            $table ->id();
            $table -> unsignedBigInteger('libro_id');
            $table -> unsignedBigInteger('cliente_id');
            $table -> integer('costo');
            $table -> foreign('libro_id')-> references('id')->on('libro')->onDelete("cascade");
            $table -> foreign('cliente_id')-> references('id')->on('cliente')->onDelete("cascade");
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
