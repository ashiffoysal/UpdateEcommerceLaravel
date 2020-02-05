<?php

namespace App;
use App\SubCategory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class, 'cate_id');
    }
}
