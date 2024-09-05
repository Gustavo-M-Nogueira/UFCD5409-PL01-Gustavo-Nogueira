<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'birthDate',
        'color',
        'person_id'
    ];


    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
