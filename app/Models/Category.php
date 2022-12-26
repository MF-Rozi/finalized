<?php
namespace App\Models;

use Franzose\ClosureTable\Models\Entity;

class Category extends Entity
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * ClosureTable model instance.
     *
     * @var \App\CategoryClosure
     */
    protected $closure = 'App\Models\CategoryClosure';

    public function posts(){
        return $this->belongsToMany(Post::class,'post_categories','category_id','post_id');
    }
}
