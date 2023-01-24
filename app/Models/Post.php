<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'status',
        'type',
        'lang',
        'date_gmt',
        'id_category',
        'content',
        'post_id',
        'count'


    ];
    public function images()
    {
        return $this->hasMany('App\Models\Image', 'post_id');
    }

    public function docs()
    {
        return $this->hasMany('App\Models\Doc', 'post_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id_category');
    }
}
