<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRawRezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raw_rezas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('team_id');
            $table->integer('van_count')->nullable();
            $table->integer('van_count_bangla')->nullable();
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
        Schema::dropIfExists('raw_rezas');
    }
}
