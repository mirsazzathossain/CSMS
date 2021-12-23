<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'make',
        'model',
        'registration_date',
        'mileage',
        'condition',
        'exterior_color',
        'interior_color',
        'transmission',
        'engine_size',
        'drivetrain',
        'features',
        'images',
        'description',
    ];


    protected $casts = [
        'features' => 'array',
        'images' => 'array',
    ];
}
