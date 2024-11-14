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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->unsignedBigInteger('instructor_id');
            $table->foreign('instructor')->references('id')->on('users');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria')->references('id')->on('categoria_cursos');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado')->references('id')->on('estado_cursos');
            $table->string('imagen');
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
        Schema::dropIfExists('cursos');
    }
};