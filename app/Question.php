<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['body'];
    protected $fill =['tag'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
