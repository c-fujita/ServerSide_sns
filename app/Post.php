<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'user_name', 'contents',
    ];

    protected $table = 'Posts';
}
