<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLidarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lidar', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrements();
            $table->float('LidarLimitHeight');
            $table->float('LidarLimitWidth');
            $table->float('LidarLimitLength');
            $table->float('LidarReadingHeight');
            $table->float('LidarReadingWidth');
            $table->float('LidarReadingLength');
            $table->float('LidarOverHeight');
            $table->float('LidarOverWidth');
            $table->float('LidarOverLength');
            $table->float('LidarPercentageHeight');
            $table->float('LidarPercentageWidth');
            $table->float('LidarPercentageLength');
            $table->boolean('IsLidarOverHeight');
            $table->boolean('IsLidarOverWidth');
            $table->boolean('IsLidarOverLength');
            $table->boolean('IsDimensionOver');
            $table->string('LidarRaw');
            $table->bigInteger('id_wim')->unsigned();
            $table->timestamps();

            $table->foreign('id_wim')->references('id')->on('wim')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lidar');
    }
}
