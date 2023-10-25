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
        Schema::create('commissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value')->nullable();
            $table->enum('type', ['paid', 'nopaid'])->nullable();
            $table->foreignId('user_id')->nullable( )->references('id')->on('users')->onDelete('cascade');
            $table->integer('aqar_id')->nullable( );
            $table->integer('booking_id')->nullable( );
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commissions');
    }
};
