<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectUser extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'comapany_id',
        'user_id'
    ];

    protected $dates = ['deleted_at'];
    
    
}
