<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFondovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fondovis', function (Blueprint $table) {
            $table->id();
            $table->string('broj_fonda');
            $table->string('naziv_fonda');
            $table->string('godina_nastanka');
            $table->string('godina_zavrsetka');
            $table->string('opis_fonda');
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
        Schema::dropIfExists('fondovis');
    }
}
