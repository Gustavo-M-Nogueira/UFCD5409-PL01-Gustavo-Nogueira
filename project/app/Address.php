<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'address',
        'city',
        'country',
        'postal_code',
        'person_id'
    ];
    
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
