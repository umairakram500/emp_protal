<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskUser extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'task_id',
        'user_id'
    ];

    protected $dates = ['deleted_at'];
}
