<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AxleWeights extends Model
{
    use HasFactory;
    protected $table = "axle_weights";
    protected $fillable = [
        'id','AxleWeight_1','AxleWeight_2','AxleWeight_3','AxleWeight_4','AxleWeight_5','wim_id',
    ]; 
}