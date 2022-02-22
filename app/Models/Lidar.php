<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lidar extends Model
{
    use HasFactory;
    protected $table = "lidar";
    protected $fillable = [
        'id_lidar','LidarLimitHeight','LidarLimitWidth','LidarLimitLength',
        'LidarReadingHeight','LidarReadingWidth','LidarReadingLength',
        'LidarOverHeight','LidarOverWidth','LidarOverLength',
        'LidarPercentageHeight','LidarPercentageWidth','LidarPercentageLength',
        'IsLidarOverHeight','IsLidarOverWidth','IsLidarOverLength',
        'IsDimensionOver','LidarRaw',
    ];
}
