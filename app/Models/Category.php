<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name' , 'parent' , 'image' , 'description' , 'meta_title' , 'meta_name' , 'meta_keyword'] ;

    public function child()
    {
        return $this->hasMany(Category::class , 'parent', 'id') ;
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class) ;
    }

}

