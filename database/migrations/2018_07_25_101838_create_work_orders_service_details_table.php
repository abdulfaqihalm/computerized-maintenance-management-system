<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkOrdersServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workOrdersServiceDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');
            $table->string('object');
            $table->integer('part_qty');
            $table->dateTime('start_time');
            $table->dateTime('finish_time');
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
        Schema::dropIfExists('workOrdersServiceDetails');
    }
}
