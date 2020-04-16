<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name', 'last_name', 'image_url', 'gradebook_id'];

    public function gradebook()
    {
        return $this->belongsTo('App\Gradebook');
    }
}
