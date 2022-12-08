<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('job');
            $table->string('fname');
            $table->string('lname');
            $table->string('emailforcontact');
            $table->string('zip');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('linkedin');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curricula');
    }
};
