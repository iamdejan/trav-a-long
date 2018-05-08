<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advices', function (Blueprint $table) {
            $table->string('adviceID')->primary();
			$table->string('cityID');
			$table->integer('days');
			$table->string('typeID');
			$table->string('activityID');
			
			$table->foreign('cityID')->references('cityID')->on('cities')
									 ->onDelete('cascade')
									 ->onUpdate('cascade');
									 
			$table->foreign('typeID')->references('typeID')->on('transport_types')
									 ->onDelete('cascade')
									 ->onUpdate('cascade');
									 
			$table->foreign('activityID')->references('activityID')->on('activities')
									 ->onDelete('cascade')
									 ->onUpdate('cascade');						 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advices');
    }
}
