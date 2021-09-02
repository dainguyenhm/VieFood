<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

    public function subCategories()
    {
        return $this->hasMany('App\Sub_Category', 'category_id', 'id');
    }
}
