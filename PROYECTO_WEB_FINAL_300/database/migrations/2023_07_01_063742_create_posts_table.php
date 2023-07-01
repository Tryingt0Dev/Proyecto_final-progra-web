<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('titulo',20);
            $table->string('archivo',100);
            $table->boolean('Baneada')->nullable();
            $table->text('motivo_ban');
            $table->timestamps();
            $table->string('users_email',20);

            //FK
            $table->foreign('users_email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
