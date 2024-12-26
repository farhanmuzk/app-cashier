<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    protected $fillable = ['user_id', 'total_commission'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}