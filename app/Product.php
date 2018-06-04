<?php

namespace App;


class Product extends Model
{
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
