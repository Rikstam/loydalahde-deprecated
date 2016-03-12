<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;

class City extends Model
{
    //
    use PostgisTrait;
    protected $table = 'cities';

    protected $fillable = [
        'name',
        'location'
    ];

    protected $postgisFields = [
        'location' => Point::class,
    ];
}
