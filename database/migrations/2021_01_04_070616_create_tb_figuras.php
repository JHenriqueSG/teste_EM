<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFiguras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figuras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo', 30);
            $table->integer('lado', 10);
            $table->integer('altura', 10);
            $table->integer('area', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figuras');
    }
}
