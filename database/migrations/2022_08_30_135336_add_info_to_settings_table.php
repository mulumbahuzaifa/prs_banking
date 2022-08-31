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
        Schema::table('sentings', function (Blueprint $table) {
            $table->string('email');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->string('address');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('youtube')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sentings', function (Blueprint $table) {
            $table->string('email');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->string('address');
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('youtube')->nullable();
        });
    }
};