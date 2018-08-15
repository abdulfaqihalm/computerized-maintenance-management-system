<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalities', function (Blueprint $table) {
            $table->integer('hospital_id');
            $table->string('siteId');
            $table->string('model');
            $table->string('manufacture_system');
            $table->string('equipment_serial_number');
            $table->string('warranty_status');
            $table->timestamps();

            $table->primary('siteId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalities');
    }
}
