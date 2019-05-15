<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public $timestamps=false;
    protected $fillable = [
        'id',
        'name',
        'postCount',
    ];
    public function post(){
        return $this->hasMany(Post::class);
    }
}
