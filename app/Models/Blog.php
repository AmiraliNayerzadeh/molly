<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Pishran\LaravelPersianSlug\HasPersianSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
class Blog extends Model
{

    use HasPersianSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    use SEOToolsTrait;



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
