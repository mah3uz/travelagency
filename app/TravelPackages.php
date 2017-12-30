<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelPackages extends Model
{
    protected $table = 'travel_packages';
    protected $fillable = [
        'title',
        'subtitle',
        'start_from',
        'destination',
        'capacity',
        'start_date',
        'description',
        'price',
    ];
}
