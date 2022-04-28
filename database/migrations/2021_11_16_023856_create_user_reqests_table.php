<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReqestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reqests', function (Blueprint $table) {
            $table->id();
            $table->string('order_no');
            $table->string('name');
            $table->string('email');
            $table->foreignId('from_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->foreignId('to_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('service_id')->references('id')->on('services')->cascadeOnDelete();
            $table->longText('sms');
            $table->double('price',2)->nullable();
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
        Schema::dropIfExists('user_reqests');
    }
}
