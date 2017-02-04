<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function spring()
    {
        return $this->belongsTo(Spring::class);
    }
}
