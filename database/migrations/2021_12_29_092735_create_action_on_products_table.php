<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionOnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_on_products', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->string('idOnProducts');
            $table->string('old_name')->nullable();
            $table->string('old_price')->nullable();
            $table->string('old_description')->nullable();
            $table->string('old_quantity')->nullable();
            $table->string('old_image')->nullable();
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
        Schema::dropIfExists('action_on_products');
    }
}
