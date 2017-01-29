<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Spring extends Model
{

    use Sluggable;
    use SluggableScopeHelpers;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'springs';

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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
        'latitude',
        'longitude',
        'description',
        'short_description',
        'visibility',
        'image'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
}
