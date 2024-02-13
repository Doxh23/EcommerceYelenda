<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
    use HasFactory;

    public $fillable = [
        "name"
    ];

    public function beers()
    {
        return $this->hasMany(beer::class);
    }
}
