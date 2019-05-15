<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'body',
        'published',
        'published_at',
        'created_at',
        'category_id'
    ];

    public function getThumbnailAttribute()
    {
        if (file_exists(public_path('/posts/' . $this->id . '/thumbnail.jpg')) ) {
            return '/posts/' . $this->id . '/thumbnail.jpg';
        }
        return '/images/lap.jpg';
    }
    public function categories(){
        return $this->belongsTo(Category::class);
    }

}
