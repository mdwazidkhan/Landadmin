<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhandlanddisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khandlanddis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('village')->nullable();
            $table->string('area')->nullable();
            $table->string('chauhaddi')->nullable();
            $table->string('ownername')->nullable();
            $table->integer('khand_id')->index()->nullable();
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
        Schema::dropIfExists('khandlanddis');
    }
}
