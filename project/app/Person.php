<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'birthDate',
        'email'
    ];


    public function pet()
    {
        return $this->hasMany('App\Pet');
    }

    public function address()
    {
        return $this->hasOne('App\Address');
    }
}
