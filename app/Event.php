<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'date', 'info', 'city'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
