<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
