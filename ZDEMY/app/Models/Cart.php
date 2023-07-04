<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    protected $fillable=['courseid', 'title','category','icon','overview','outcome','ytid','duration','price',
    'titles','rating','enrolled','author_id','author','userid'];
}
