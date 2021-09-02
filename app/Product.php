<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'unit_price',
        'quantity',
        'description',
        'image',
        'status',
        'hot',
        'discount',
        'sub_category_id',
    ];

    public function subCategory()
    {
        return $this->belongsTo('App\Sub_Category', 'sub_category_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\Order_Detail', 'product_id', 'id');
    }

    public function likes () 
    {
        return $this->hasMany('App\Like', 'product_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'product_id', 'id')->orderBy('id', 'DESC');;
    }

    public function orders()
    {
        return $this->belongsToMany('App\Order', 'order_details', 'product_id', 'order_id')->withTimestamps();
    }

}
