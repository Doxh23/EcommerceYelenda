<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public $table = "categories";
    public $fillable = [
        "name"
    ];

    public function beers()
    {
        return $this->hasMany(beer::class);
    }
}
