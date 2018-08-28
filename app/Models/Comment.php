<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id'
    ];


    protected $dates = ['deleted_at'];

    
}
