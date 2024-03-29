<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleArticleCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'article_category_id',
    ];
}
