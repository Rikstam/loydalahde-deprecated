<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;

class Spring extends Model
{

    use PostgisTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'springs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'];

    protected $postgisFields = [
        'location' => Point::class,
    ];
}
