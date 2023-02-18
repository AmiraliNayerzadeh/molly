<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Pishran\LaravelPersianSlug\HasPersianSlug;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{

    use HasPersianSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

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

