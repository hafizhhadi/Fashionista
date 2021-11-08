<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'price',
        'image',
        'description',
        'name',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
