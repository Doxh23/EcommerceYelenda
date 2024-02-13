<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beer extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'brand_id',
        'flavor_id',
        'brewing_id',
        'containings_id',
        'category_id',
        'tank_time',
        'degree',
        'quantity',
        'description',
        'stock',
        'salable',
        "price",
        "image_path"
    ];

    public function brand()
    {

        return $this->belongsTo(brand::class);
    }

    public function flavor()
    {

        return $this->belongsTo(flavor::class);
    }

    public function brewing()
    {

        return $this->belongsTo(brewing::class);
    }

    public function containing()
    {

        return $this->belongsTo(containings::class);
    }


    public function category()
    {

        return $this->belongsTo(category::class);
    }
}
