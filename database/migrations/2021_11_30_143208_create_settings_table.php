<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            // $table->string('key');
            // $table->string('value');

            $table->string('comp_name');
            $table->longText('about');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('country');
            $table->string('city');
            $table->string('email');
            $table->string('websiteLink');
            $table->string('FBLink');
            $table->string('LinLink');
            $table->string('YoutubeLink');
            $table->string('map');
            $table->string('image')->default('1.png');
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
        Schema::dropIfExists('settings');
    }
}
