<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aqars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('Chalet_type')->nullable();
            $table->boolean('status')->nullable()->default(0);
            $table->float('fixed_price')->nullable();
            $table->json('changed_price')->nullable();
            $table->string('main_image')->nullable();
            $table->json('images')->nullable();
            $table->string('videos')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->integer('space')->nullable();
            $table->time('time_to')->nullable();
            $table->time('time_from')->nullable();
            $table->longText('description')->nullable();
            $table->longText('details')->nullable();
            $table->string('comision')->nullable();
            $table->enum('individual', ['families', 'youths'])->nullable();
            $table->string('floor_id')->nullable();
            $table->string('car_position_id')->nullable();
            $table->string('service_id')->nullable();
            $table->string('bathroom_id')->nullable();
            $table->string('free_service_id')->nullable();
            $table->string('total_area')->nullable();
            $table->string('Insurance_amount')->nullable();
            $table->string('amount_deposit')->nullable();
            $table->string('rental_period')->nullable();
            $table->string('laundry_id')->nullable();
            $table->string('kitchen_id')->nullable();
            $table->string('crew_id')->nullable();
            $table->string('country_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('policy_place')->nullable();
            $table->boolean('active')->default(1);
            $table->string('conditioning_type_id')->nullable();
            $table->string('another_room_id')->nullable();
            $table->string('floor_number_id')->nullable();
            $table->string('map_link')->nullable();
            $table->integer('total_rooms')->nullable();
            $table->integer('unitnumber')->nullable();
            $table->integer('ads_status_id ')->nullable();
            $table->integer('hallnumber')->nullable();
            $table->integer('bathroomnumber')->nullable();
            $table->integer('personnumber')->nullable();
            $table->integer('masterroom')->nullable();
            $table->integer('normalroom')->nullable();
            $table->integer('ads_id')->nullable()->unsigned();
            $table->foreign('ads_id')->references('id')->on('ads');
            $table->foreignId('category_id')->nullable()->unsigned()->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('aqars');
    }
};
