<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightReading extends Model
{
    use HasFactory;

    protected $table = 'weight_readings';

    protected $fillable = [
        'weight',
        'vehicle_no',
        'customer_name',
        'supplier_name',
        'driver_name',
        'gate_pass_no',
        'description',
        'reading_type',
        'reading_time'
    ];

    protected $casts = [
        'weight' => 'float',
        'reading_time' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
