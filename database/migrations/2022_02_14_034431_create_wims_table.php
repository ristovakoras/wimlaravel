<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wim', function (Blueprint $table) {
            $table->bigIncrements('id_wim')->autoIncrements();
            $table->float('Weight');
            $table->float('Speed');
            $table->float('LimitWeight');
            $table->float('LimitAxle');
            $table->float('OverWeight');
            $table->float('OverPercentage');
            $table->float('IsWeightOver');
            $table->float('Axle_wim');
            $table->DateTime('WeighingDateTime');
            $table->time('WeighingTime');
            $table->time('WeighingDate');
            $table->string('LicencePlate');
            $table->string('InfoTestNumber');
            $table->string('InfoValidPeriod');
            $table->string('InfoVehicleType');
            $table->string('InfoAxleConfiguration');
            $table->string('InfoOwnerName');
            $table->string('InfoOwnerAddress');
            $table->boolean('DoesLicencePlateExist');
            $table->boolean('IsOverWeight');
            $table->boolean('IsOverDimension');
            $table->string('Image');
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
        Schema::dropIfExists('wim');
    }
}
