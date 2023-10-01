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
        Schema::create('aqar_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable( )->references('id')->on('users')->onDelete('cascade');
            $table->integer('aqar_id')->nullable( )->references('id')->on('aqars')->onDelete('cascade');

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
        Schema::dropIfExists('aqar_user');
    }
};
