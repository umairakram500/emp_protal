<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'description',
        'days',
        'hours',
        'user_id',
        'company_id',
        'project_id'
    ];

    protected $dates = ['deleted_at'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
