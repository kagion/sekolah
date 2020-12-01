<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //mass assignment all field
    protected $guarded = [];

    //belongsToMany ke table atau Model Post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }


    //belongsToMany ke table atau Model Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //change default date view
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d-M-Y');
    }
}
