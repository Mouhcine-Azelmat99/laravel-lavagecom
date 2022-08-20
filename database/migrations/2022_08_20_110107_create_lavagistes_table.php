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
        Schema::create('lavagistes', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('logo')->nullable();
            $table->string('tel')->unique();
            $table->string('email')->unique();
            $table->string('heur_deb');
            $table->string('heur_fin');
            $table->dateTime('date_repo')->nullable();
            $table->string('adress')->nullable();
            $table->string('ville');
            $table->boolean('etat')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('lavagistes');
    }
};
