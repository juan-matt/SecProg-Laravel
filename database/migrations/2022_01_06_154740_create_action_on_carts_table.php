<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionOnCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_on_carts', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->string('user_id');
            $table->string('idOnProducts');
            $table->string('idOnCart');
            $table->string('name');
            $table->string('user_input_quantity');
            
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
        Schema::dropIfExists('action_on_carts');
    }
}
