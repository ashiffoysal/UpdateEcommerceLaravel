<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{


    public function category()
    {
        return $this->belongsTo('App\Category', 'cate_id', 'id');
    }
    public function subcate()
    {
        return $this->belongsTo('App\SubCategory', 'subcate_id', 'id');
    }

    public function totalbrand()
    {
        return $this->belongsTo('App\Brand', 'brand', 'id');
    }

}
