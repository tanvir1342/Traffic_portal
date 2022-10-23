<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traffic_point_statuses', function (Blueprint $table) {
            $table->bigInteger('tps_id');
            $table->string('schedule_name');
            $table->string('status');
            $table->bigInteger('avarage_vechile');
            $table->bigInteger('tp_id');
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
        Schema::dropIfExists('traffic_point_statuses');
    }
};
