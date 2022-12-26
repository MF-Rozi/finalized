<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory,HasSLug;
     /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
     /**
     * Get the options for generating the slug.
     */
     public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function categories(){
       return $this->belongsToMany(Category::class,'post_categories','post_id','category_id');
    }
    public function image(){
        return $this->hasOne(Image::class);
    }
}
