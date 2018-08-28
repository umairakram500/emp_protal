<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    
    protected $dates = ['deleted_at'];

    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function projects(){
        return $this->hasMany('App\Models\Project');
    }

    public function tasks()
    {
        return $this->hasManyThrough('App\Models\Tasks', 'App\Models\Project');
    }
}
