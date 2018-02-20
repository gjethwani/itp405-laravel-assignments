<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $primaryKey = 'InvoiceItemId';
    public $timestamps = false;

    public function Track()
    {
        return $this->belongsTo('App\Track', 'TrackId');
    }
    
}
