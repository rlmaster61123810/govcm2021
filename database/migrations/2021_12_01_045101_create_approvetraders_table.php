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
            $table->integer('population_id');
            $table->interger('product_type_id');
            $table->date('register_date');
            $table->date('approve_date');
            $table->integer('user_id');
            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
            ])->default('pending');
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
