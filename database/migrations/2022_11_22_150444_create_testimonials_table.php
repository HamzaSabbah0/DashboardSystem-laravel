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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('title_tu');
            $table->string('title_fr');
            $table->longText('description_ar');
            $table->longText('description_en');
            $table->longText('description_tu');
            $table->longText('description_fr');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('name_tu');
            $table->string('name_fr');
            $table->string('career_title_ar');
            $table->string('career_title_en');
            $table->string('career_title_tu');
            $table->string('career_title_fr');

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
        Schema::dropIfExists('testimonials');
    }
};
