<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    /**
     * The roles that belong to the user.
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
