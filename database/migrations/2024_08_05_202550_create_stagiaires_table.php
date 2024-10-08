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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->integer('registration_number');
            $table->string('full_name');
            $table->string('depart');
            $table->date('hire_date');
            $table->integer('phone');
            $table->string('adress');
            $table->string('city');
            $table->timestamps();
        });
        Schema::create('stagiaire', function (Blueprint $table) {
            $table->id();
            $table->integer('registration_number');
            $table->string('full_name');
            $table->integer('depart');
            $table->date('hire_date');
            $table->integer('phone');
            $table->string('adress');
            $table->string('city');
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
        Schema::dropIfExists('employes');
    }
};
