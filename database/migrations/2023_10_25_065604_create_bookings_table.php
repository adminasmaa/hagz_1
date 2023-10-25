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
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['website','application'])->default('website');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('total')->nullable();
            $table->string('note')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('reciept_date')->nullable();
            $table->integer('day_count')->nullable();
            $table->integer('visit_count')->nullable();
            $table->boolean('active')->nullable()->default(1);
            $table->string('date')->nullable();
            $table->string('price')->nullable();
            $table->string('total_price')->nullable();
            $table->integer('status')->nullable();

            $table->integer('aqar_id')->nullable( )->unsigned();
            $table->foreign('aqar_id')->references('id')->on('aqars');


            $table->string('comision')->nullable();

            $table->foreignId('user_id')->nullable( )->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('bookings');
    }
};
