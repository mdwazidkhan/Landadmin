<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhandlandinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khandlandinfo', function (Blueprint $table) {
            $table->increments('vid');
            $table->integer('kid')->index()->nullable();
            $table->string('village')->nullable();
            $table->string('area')->nullable();
            $table->string('Chauhaddi')->nullable();
            $table->string('ownername')->nullable();
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
        Schema::dropIfExists('khandlandinfo');
    }
}
