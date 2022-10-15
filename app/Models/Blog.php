<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = ['title', 'description' , 'meta_title' , 'meta_keyword' , 'meta_description' , 'status' ,'image' , 'english_title' , 'english_description' , 'english_meta_title' , 'english_meta_keyword' , 'english_meta_description'] ;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
