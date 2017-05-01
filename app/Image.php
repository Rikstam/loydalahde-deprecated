<?php
/**
 * Created by PhpStorm.
 * User: rikukestila
 * Date: 24/04/2017
 * Time: 17.18
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function spring()
    {
        return $this->belongsTo(Spring::class);
    }
}
