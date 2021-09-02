<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'image',
        'post_group_id',
    ];

    public function postGroup()
    {
        return $this->belongsTo('App\Post_Group', 'post_group_id', 'id');
    }
}
