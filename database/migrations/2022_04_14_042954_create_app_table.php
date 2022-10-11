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
        Schema::create('app', function (Blueprint $table) {
            $table->id();
            $table->string('tip');
            $table->string('marka');
            $table->string('model');
            $table->string('pk');
            $table->string('dv');
            $table->string('korobka');
            $table->string('fio');
            $table->string('email');
            $table->string('mobile');
            $table->string('gos');
            $table->string('ra');
            $table->string('comment');
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
        Schema::dropIfExists('app');
    }
};
