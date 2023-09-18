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
        Schema::create('aqar_sections', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('section_id')->nullable( )->unsigned();
            $table->foreign('section_id')->references('id')->on('aqar_details');

            $table->integer('sub_section_id')->nullable( )->unsigned();
            $table->foreign('sub_section_id')->references('id')->on('aqar_details');

            $table->integer('aqar_id')->nullable( )->unsigned();
            $table->foreign('aqar_id')->references('id')->on('aqars');

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
        Schema::dropIfExists('aqar_sections');
    }
};
