<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_translations', function (Blueprint $table) {
            $table->id();
            $table->longText('vision')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('description_one')->nullable();
            $table->longText('description_two')->nullable();
            $table->string('locale')->index();
            $table->unsignedBigInteger('about_us_id');
            $table->unique(['about_us_id', 'locale']);
            $table->foreign('about_us_id')->references('id')->on('about_us')->onDelete('cascade');

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
        Schema::dropIfExists('about_us_translations');
    }
}
