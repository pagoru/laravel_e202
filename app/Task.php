<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'slug'];

    public function tasks(){
        return $this->hasMany('App\Task');
    }
}
