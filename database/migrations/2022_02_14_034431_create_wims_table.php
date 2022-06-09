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
            $table->bigIncrements('id')->autoIncrements();
            $table->float('Weight_wim');
            $table->float('Speed');
            $table->float('LimitWeight');
            $table->float('LimitAxle');
            $table->float('OverWeight');
            $table->float('OverPercentage');
            $table->boolean('IsWeightOver');
            $table->integer('Axle_wim');
            $table->DateTime('WeighingDateTime');
            $table->time('WeighingTime');
            $table->Date('WeighingDate');
            $table->string('LicencePlate');
            $table->string('InfoTestNumber');
            $table->string('InfoValidPeriod');
            $table->string('InfoVehicleType');
            $table->string('InfoAxleConfiguration');
            $table->string('InfoOwnerName');
            $table->string('InfoOwnerAddress');
            $table->boolean('DoesLicencePlateExist');
            $table->string('Location');
            $table->string('Image');
            $table->string('Image_Plate');
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
