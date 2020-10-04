<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateyieldChanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yieldChanges', function (Blueprint $table) {
            $table->integer('contry');
            $table->integer('yearr');
            $table->string('esc');
            $table->integer('harvest');
            $table->float('changes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yieldChanges');
    }
}
