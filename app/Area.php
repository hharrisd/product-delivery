<?php

namespace App;


class Area extends Model
{
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
