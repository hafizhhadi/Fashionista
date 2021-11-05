<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'receipt',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class,'product_id','payment_id');
    }
}
