<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'short',
        'page_content',
        'page_id',
        'gallery_id',
        'keywords',
    ];

    public function article_categories()
    {
        return $this->belongsToMany(ArticleCategory::class);
    }
}
