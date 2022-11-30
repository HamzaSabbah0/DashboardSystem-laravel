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
        Schema::create('team_works', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('title_tu');
            $table->string('title_fr');
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
        Schema::dropIfExists('team_works');
    }
};
