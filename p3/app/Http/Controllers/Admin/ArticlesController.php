<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleArticleCategory;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return Inertia::render('Admin/Articles/Index', [
            'articles' => $articles,
        ]);
    }

    public function create()
    {
        //Collect Article Categories
        $article_categories = ArticleCategory::all();

        return Inertia::render('Admin/Articles/Create', [
            'article_categories' => $article_categories,
        ]);

    }

    public function store(Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'short' => ['nullable'],
            'page_content' => ['required'],
            'gallery_id' => ['nullable'],
            'keywords' => ['nullable'],
        ]);

        $article = Article::create([
            'name' => Request::input('name'),
            'slug' => Str::slug(Request::input('name'), '-'),
            'short' => Request::input('short'),
            'description' => Request::input('description'),
            'page_content' => Request::input('page_content'),
            'gallery_id' => Request::input('gallery_id'),
            'keywords' => Request::input('keywords'),
        ]);

        ##Debug Request##
        // dd(Request::input('name'));

         return redirect('admin/articles/edit/'.$article->id);
    }

    public function edit($article_id)
    {

        $article = Article::where('id', $article_id)->first();
        $article_categories = ArticleCategory::all();

        return Inertia::render('Admin/Articles/Edit', [
            'article' => [
                'id' => $article->id,
                'name' => $article->name,
                'description' => $article->description,
                'page_content' => $article->phone,
                'extension' => $article->extension,
                'email' => $article->email,
                'page_content' => $article->page_content,
                'hidden' => $article->hidden,
            ],
            'article_categories' => $article_categories,
          ]);

    }

    public function update($article_id, Request $request)
    {
        $article = Article::where('id', $article_id)->first();

        Request::validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'short' => ['nullable'],
            'page_content' => ['required'],
            'gallery_id' => ['nullable'],
            'keywords' => ['nullable'],
        ]);

        $select_article_categories = Request::input('select_article_categories');
        //dd($select_article_categories);

        //Clear existing article_article_category pivot table
        ArticleArticleCategory::where('article_id', $article_id)->delete();


        foreach($select_article_categories as $sac){

            $tac = ArticleCategory::where('id', $sac)->first();
            //dd($sac);
            //$article->article_categories()->attach($sac);
            //dd($article->pivot->article_categories);
            //$article->pivot->article_categories->article_category_id=$sac;
            //$the_article_category = new ArticleCategory;
            //$article->pivot->the_article_category->article_category_id=$sac;
            //$article->pivot->save();
            // $article->pivot->article_categories = $tac;
            // $article->pivot->save();
            $article->article_categories()->attach($tac);
        }

        $article->update([
            'name' => Request::input('name'),
            'slug' => Str::slug(Request::input('name'), '-'),
            'short' => Request::input('short'),
            'description' => Request::input('description'),
            'page_content' => Request::input('page_content'),
            'gallery_id' => Request::input('gallery_id'),
            'keywords' => Request::input('keywords'),
        ]);

        return redirect('/admin/articles/index')->with('success', 'Article updated.');

    }

    public function update_categories($article_id, Request $request)
    {

        //Update Categories
        $the_article = Article::where('id', $article_id)->first();
        dump($the_article->article_categories-toArray());

        $article = Article::where('id', $article_id)->first();
        $article_categories = ArticleCategory::all();

        return Inertia::render('Admin/Articles/Edit', [
            'article' => [
                'id' => $article->id,
                'name' => $article->name,
                'description' => $article->description,
                'page_content' => $article->phone,
                'extension' => $article->extension,
                'email' => $article->email,
                'page_content' => $article->page_content,
                'hidden' => $article->hidden,
            ],
            'article_categories' => $article_categories,
          ]);
    }

    public function delete($article_id)
    {
        $article = Article::find($article_id);
        $article->delete();

        return redirect('/admin/article_categories/index');
    }
}
