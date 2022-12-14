<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'parent_id',
        'sort_order',
        'slug',
    ];

    public function pages()
    {
        return $this->hasMany('App\Models\Page', 'id_menu');
    }
}
