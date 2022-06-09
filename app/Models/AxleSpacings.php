<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AxleSpacings extends Model
{
    use HasFactory;
    protected $table = "axle_spacings";
    protected $fillable = [
        'id','Axles_1', 'Axles_2', 'Axles_3', 'Axles_4','Distance_1','Distance_2', 'Distance_3','Distance_4','wim_id',
    ]; 

    public function wim()
    {
        return $this->belongsTo(Wim::class);
    }
}
