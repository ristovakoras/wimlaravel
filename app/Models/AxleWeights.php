<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AxleWeights extends Model
{
    use HasFactory;
    protected $table = "axle_weights";
    protected $fillable = [
        'id_axle_weights','Axle','Weight',
    ]; 
}
