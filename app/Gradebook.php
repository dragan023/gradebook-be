<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gradebook extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
