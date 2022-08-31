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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('name');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('slug')->unique();
            $table->string('image');
            $table->text('description');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('name');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('slug')->unique();
            $table->string('image');
            $table->text('description');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};