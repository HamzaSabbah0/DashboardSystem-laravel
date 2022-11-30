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
        Schema::create('eleven_activities', function (Blueprint $table) {
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
            $table->string('section_title');
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
        Schema::dropIfExists('eleven_activities');
    }
};
