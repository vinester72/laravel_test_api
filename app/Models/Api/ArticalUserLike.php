<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticalUserLike extends Model
{
    use HasFactory;

    protected $table = 'article_user_likes';
    protected $guarded = false;
}
