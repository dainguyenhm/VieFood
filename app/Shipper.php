<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'shippers';

    protected $fillable = [
        'name',
        'phone',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order', 'shipper_id', 'id');
    }
}
