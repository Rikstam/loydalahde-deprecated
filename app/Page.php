<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    function contentBlocks()
    {
        return $this->hasMany('App\ContentBlock');
    }
}
