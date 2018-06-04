<?php

namespace App;


class Store extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getProducts()
    {
        return $this->products();
    }
}
