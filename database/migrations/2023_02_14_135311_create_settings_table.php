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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('terms_conditions')->nullable();
            $table->string('website_address')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('website_link')->nullable();
            $table->string('logo')->nullable();
            $table->string('availability_time_from')->nullable();
            $table->string('availability_time_to')->nullable();
            $table->string('activate')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('play_store')->nullable();
            $table->string('google_play')->nullable();
            $table->string('theme')->nullable();
            $table->text('closing_message')->nullable();
            $table->text('description')->nullable();
            $table->json('key_words')->nullable();
            $table->string('ads_top')->nullable();
            $table->string('ads_bottom')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('snapchat')->nullable();
            $table->time('time_difference')->nullable();
            $table->enum('closing',['open','closed']);
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
        Schema::dropIfExists('settings');
    }
};
