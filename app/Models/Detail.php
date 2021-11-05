<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'address',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
