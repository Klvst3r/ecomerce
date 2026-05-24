<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'title',
        'price',
        'description',
        'image_url',
    ];

    public function url(){
       return $this->id ? 'products.update' : 'products.store';
    }

    protected $attributes = [
        'image_url' => null,
    ];

    public function price()
    {
        return $this->price;
    }
}
