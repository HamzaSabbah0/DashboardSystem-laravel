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
            $table->id();
            $table->string('logo_photo')->nullable();
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('youtube_link');
            $table->string('telegram_link');
            $table->string('snapchat_link');
            $table->string('tiktok_link');
            $table->string('whatsapp_number');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
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
};
