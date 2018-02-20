<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $primaryKey = 'TrackId';

    public function Album()
    {
        return $this->belongsTo('App\Album', 'AlbumId');
    }
}
