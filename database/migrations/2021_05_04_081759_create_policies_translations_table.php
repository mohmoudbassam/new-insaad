<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies_translations', function (Blueprint $table) {
            $table->id();
            $table->longText('privacy')->nullable();
            $table->longText('usage')->nullable();
            $table->longText('refund')->nullable();
            $table->longText('agreement')->nullable();
            $table->string('locale')->index();
            $table->unsignedBigInteger('policies_id');
            $table->unique(['policies_id', 'locale']);
            $table->foreign('policies_id')->references('id')->on('policies')->onDelete('cascade');

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
        Schema::dropIfExists('policies_translations');
    }
}
