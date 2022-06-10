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
        Schema::table('maklumat', function (Blueprint $table) {
            // command ini tidak mengikat column user_id kepada column user
            //$table->bigInteger('user_id')->unsigned();

            // Cara ini mengikat (constrain) data yang dimasukkan perlu merujuk kepada table users
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            // Cara 2 ini boleh digunakan untuk relation dengan syarat nama table dan column mengikut
            // naming convension yang laravel sarankan
            //$table->foreignId('user_id')->constrained();

            // $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maklumat', function (Blueprint $table) {
            //
        });
    }
};
