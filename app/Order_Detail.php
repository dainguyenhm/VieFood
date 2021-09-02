<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $tabel = 'order_details';

    protected $fillable = [
        'unit_price',
        'quantity',
        'discount',
        'order_id',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'order_id', 'id');
    }
}
