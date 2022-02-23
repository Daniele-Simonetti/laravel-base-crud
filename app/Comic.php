<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'type',
        'sale_date',
        'created_at',
        'updated_at',
    ];
}
