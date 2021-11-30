<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovetradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvetraders', function (Blueprint $table) {
            $table->id();
            $table->string('population_id');
            $table->string('product_type');
            $table->string('product_name');
            $table->date('approve_day');
            $table->date('approve_pass');
            $table->string('name_approve');
            $table->string('status');

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
        Schema::dropIfExists('approvetraders');
    }
}
