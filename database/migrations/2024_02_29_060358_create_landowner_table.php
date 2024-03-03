<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandownerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landowner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ownername')->nullable();
            $table->string('village')->nullable();
            $table->string('mauja')->nullable();
            $table->string('chauhaddi')->nullable();
            $table->string('khand_id')->index()->nullable();
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
        Schema::dropIfExists('landowner');
    }
}
