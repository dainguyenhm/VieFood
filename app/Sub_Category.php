<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    protected $table = 'sub_categories';

    protected $fillable = [
        'name',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Product', 'sub_category_id', 'id');
    }
}
