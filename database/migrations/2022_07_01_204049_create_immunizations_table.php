<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmunizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immunizations', function (Blueprint $table) {
            $table->unsignedBigInteger('kid_id');
            $table->unsignedBigInteger('toi_id');
            $table->foreign('kid_id')->references('id')->on('kids')->onDelete('cascade');
            $table->foreign('toi_id')->references('id')->on('type_of_immunizations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immunizations');
    }
}
