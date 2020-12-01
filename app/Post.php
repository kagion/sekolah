<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass assignment all field
    protected $guarded = [];

    //belongsTo table atau Model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}