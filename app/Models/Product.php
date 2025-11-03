<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
        'image_public_id',
    ];
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }


}




