<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function getTotalAttribute($total)
    {
        return $total / 100;
    }

    public function setTotalAttribute($total)
    {
        $this->attributes['total'] = $total * 100;
    }
}
