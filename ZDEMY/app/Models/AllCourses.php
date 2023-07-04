<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllCourses extends Model
{
    use HasFactory;

    protected $fillable=['title','category','icon','overview','outcome','ytid','duration','price',
    'titles','rating','enrolled','author_id','author'];

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['tags']);
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . $filters['search'] . '%');
            //  ->orWhere('tags', 'like', '%' . $filters['search'] . '%');
        }

    }

}
