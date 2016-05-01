<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Spring extends Model implements SluggableInterface
{
    use PostgisTrait;
    use SluggableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'springs';

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
        'on_update'  => true
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'alias',
        'status',
        'tested_at',
        'location',
        'description',
        'short_description',
        'visibility',
        'image'
    ];

    protected $postgisFields = [
        'location' => Point::class,
    ];
}
