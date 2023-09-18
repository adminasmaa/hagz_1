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
        Schema::create('aqar_setting', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('detail_id')->unsigned();
            $table->foreign('detail_id')->references('id')->on('aqar_details')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('required')->default('0');
            $table->integer('display')->default('0');
            $table->foreignId('category_id')->nullable()->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('inserted_by')->nullable()->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('aqar_setting');
    }
};
