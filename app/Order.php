<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'shipper_id',
        'shipper_time',
    ];

    public function orderDetails()
    {
        return $this->hasMany('App\Order_Detail', 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function shipper()
    {
        return $this->belongsTo('App\Shipper', 'shipper_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'order_details', 'order_id', 'product_id')->withTimestamps();
    }

}
