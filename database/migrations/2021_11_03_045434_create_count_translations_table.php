<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('item');
            $table->unsignedBigInteger('count_id');
            $table->string('locale')->index();
            $table->unique(['count_id', 'locale']);
            $table->foreign('count_id')->references('id')->on('counts')->onDelete('cascade');
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
        Schema::dropIfExists('count_translations');
    }
}
