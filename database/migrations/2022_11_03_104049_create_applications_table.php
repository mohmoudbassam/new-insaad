<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('company_name');
            $table->string('phone');
            $table->string('email');
            $table->string('online_store_url');
            $table->string('online_store_platform');
            $table->text('message')->nullable();
            $table->integer('count_orders');
            $table->integer('count_orders_ads');
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
        Schema::dropIfExists('applications');
    }
}
