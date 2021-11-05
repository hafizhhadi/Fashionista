<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'rate_id',
    ];

    public function rating()
    {
        return $this->belongsTo(Rating::class,'rate_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
