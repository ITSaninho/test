<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'article_tag', 'article_id', 'tag_id');
    }
}
