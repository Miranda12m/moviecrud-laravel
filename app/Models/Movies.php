<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'movies';
    protected $fillable = ['title', 'description', 'imageUrl', 'date'];
}