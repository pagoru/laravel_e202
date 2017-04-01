<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_id', 'name', 'slug', 'completed', 'description'];

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function tasks(){
        return $this->hasMany('App\Task');
    }
}
