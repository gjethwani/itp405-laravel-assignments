<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $primaryKey = 'ArtistId';
    public $timestamps = false;

    public function Album() {
      return $this->hasMany('App\Album', 'ArtistId');
    }
}
