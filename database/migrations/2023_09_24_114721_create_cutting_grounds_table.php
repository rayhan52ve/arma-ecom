<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuttingGroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutting_grounds', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('team_id');
            $table->integer('quantity')->nullable();
            $table->integer('quantity_bangla')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('amount_bangla')->nullable();            
            $table->integer('total_amount')->nullable();
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
        Schema::dropIfExists('cutting_grounds');
    }
}
