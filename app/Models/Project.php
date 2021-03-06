<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'description',
        'days',
        'user_id',
        'company_id'
    ];

    protected $dates = ['deleted_at'];
    
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    
}
