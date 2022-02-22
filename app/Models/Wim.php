<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wim extends Model
{
    use HasFactory;
    protected $table = "wim";
    protected $fillable = [
        'id_wim','Weight','Speed','LimitWeight','LimitAxle','OverWeight','OverPercentage','IsWeightOver',
        'Axle_wim','WeighingDateTime','WeighingTime','WeighingDate','LicencePlate','InfoTestNumber',
        'InfoValidPeriod','InfoVehicleType','InfoAxleConfiguration','InfoOwnerName','InfoOwnerAddress',
        'DoesLicencePlateExist','IsOverWeight','IsOverDimension','Image',
    ]; 
}
