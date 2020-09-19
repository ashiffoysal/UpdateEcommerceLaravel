<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'checkout';


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
