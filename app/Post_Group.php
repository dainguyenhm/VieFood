<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Group extends Model
{
    protected $table = 'post_groups';

    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post', 'post_group_id', 'id');
    }
}
