<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPlace extends Model
{
    public function usermain()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
