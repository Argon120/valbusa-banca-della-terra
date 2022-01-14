<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrenos', function (Blueprint $table) {
            $table->id();
            $table->string('ownerID');
            $table->text('comune')->nullable();
            $table->string('imgURL')->nullable();
            $table->text('dimensione')->nullable();
            $table->string('foglio')->nullable();
            $table->string('mappale')->nullable();
            $table->string('parcella')->nullable();
            $table->text('terreno')->nullable();
            $table->text('irrigazione')->nullable();
            $table->text('offerta')->nullable();
            $table->text('canone')->nullable();
            $table->boolean('disponibile')->default(true)->nullable();
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
        Schema::dropIfExists('terrenos');
    }
}
