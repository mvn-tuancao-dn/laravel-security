<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['user_id', 'id', 'title', 'content'];

    public function user() {
        return $this->belongsTo('App\Post','user_id','id');
    }
}
