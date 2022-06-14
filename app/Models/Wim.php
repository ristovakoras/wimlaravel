<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wim extends Model
{
    use HasFactory;
    protected $table = "wim";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','Weight_wim','Speed','LimitWeight','LimitAxle','OverWeight','OverPercentage','IsWeightOver',
        'Axle_wim','WeighingDateTime','WeighingTime','WeighingDate','LicencePlate','InfoTestNumber',
        'InfoValidPeriod','InfoVehicleType','InfoAxleConfiguration','InfoOwnerName','InfoOwnerAddress',
        'DoesLicencePlateExist','Location','Image','Image_Plate','WideViewImage'
    ];

    public function axlespacings()
    {
        return $this->hasMany(Axlespacings::class);
    }

    public function lidar()
    {
        return $this->hasOne('App\Models\Lidar','id','id');
        // return $this->hasOne(Lidar::class, 'foreign_key');
    }

}
