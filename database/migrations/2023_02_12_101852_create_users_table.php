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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('firstname')->nullable();
            $table->string('country_code')->nullable();
            $table->string('lastname')->nullable();
            $table->string('code')->nullable();
            $table->string('address')->nullable();
            $table->string('comision')->nullable();
            $table->string('image')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('account_type')->default('User');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->boolean('active')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('details')->nullable();
            $table->integer('category_id')->nullable();

            $table->foreignId('country_id')->nullable( )->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('city_id')->nullable( )->references('id')->on('cities')->onDelete('cascade');

            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
};
