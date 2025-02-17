<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = [
        "user_id",
        "title",
        "file",
        "category"
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
