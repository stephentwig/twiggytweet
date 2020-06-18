<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    // since we are mass assigning, must be empty array
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
