<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wim extends Model
{
    use HasFactory;
    protected $table = "wim";
    protected $fillable = [
        'id','Weight_wim','Speed','LimitWeight','LimitAxle','OverWeight','OverPercentage','IsWeightOver',
        'Axle_wim','WeighingDateTime','WeighingTime','WeighingDate','LicencePlate','InfoTestNumber',
        'InfoValidPeriod','InfoVehicleType','InfoAxleConfiguration','InfoOwnerName','InfoOwnerAddress',
        'DoesLicencePlateExist','Location','Image','Image_Plate'
    ]; 

    public function axlespacings()
    {
        return $this->hasMany(Axlespacings::class);
    }

    public function lidar()
    {
        return $this->hasOne(Lidar::class);
    }

}
