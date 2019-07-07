<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function setNameAttribute($name)
    {
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $this->attributes['name'] = ucwords($name);
    }

    public function setDescriptionAttribute($description)
    {
        $description = trim($description);
        $description = filter_var($description, FILTER_SANITIZE_STRING);
        $this->attributes['description'] = ucfirst($description);
    }

    public function getPriceAttribute($price)
    {
        return $price / 100;
    }

    public function setPriceAttribute($price)
    {
        $this->attributes['price'] = $price * 100;
    }
}
