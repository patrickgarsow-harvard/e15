<?php

namespace App\Actions\Article;

class StoreNewArticle
{
    public function __construct($newArticleData)
    {
        $article = new Article();
        $article->name = $newArticleData->name;
        $article->slug = $newArticleData->slug;
        $article->short = $newArticleData->short;
        $article->description = $newArticleData->description;
        $article->page_content = $newArticleData->page_content;
        $article->gallery_id = $newArticleData->gallery_id;
        $article->keywords = $newArticleData->keywords;
        $article->save();

        $this->results = new stdClass();
        //$this->results
    }
}
