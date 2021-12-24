<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('fname');
            $table->string('lname');
            $table->unsignedSmallInteger('weight');
            $table->unsignedSmallInteger('height');
            $table->string('country');
            $table->tinyInteger('player_number');
            $table->foreignId('position_id');
            $table->date('joining_date');
            $table->date('dob');
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
        Schema::dropIfExists('players');
    }
}
