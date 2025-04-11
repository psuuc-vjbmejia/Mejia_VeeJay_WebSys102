<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
        protected $fillable = [
        'title',
        'author',
        'published_date',
    ];

    protected $guarded = [
        'id',
    ];

}