<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=["name", "description", "weight", "price"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
