<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['cate_name', 'show_menu'];

    public function Products()
    {
        return $this->hasMany('App\Product', 'cate_id');
    }
}
