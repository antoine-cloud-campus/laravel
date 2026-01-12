<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Settings extends Model
{
    protected $fillable = ['theme', 'lang', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
