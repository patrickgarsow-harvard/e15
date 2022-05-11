<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ArticleCategoriesController extends Controller
{
    public function index()
    {
        $article_categories = ArticleCategory::all();
        //dd($article_categories);
        return Inertia::render('Admin/ArticleCategories/Index', [
            'article_categories' => $article_categories,
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/ArticleCategories/Create', []);
    }

    public function store(Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        ArticleCategory::create([
            'name' => Request::input('name'),
            'description' => Request::input('description'),
        ]);

        ##Debug Request##
        // dd(Request::input('name'));

         return redirect('admin/article_categories/index');
    }

    public function edit($id)
    {

        $article_category = ArticleCategory::where('id', $id)->first();
        //dd($department);
        return Inertia::render('Admin/ArticleCategories/Edit', [
            'article_category' => [
                'id' => $article_category->id,
                'name' => $article_category->name,
                'description' => $article_category->description,
            ],
          ]);

    }

    public function update($article_category_id, Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        $article_category = ArticleCategory::where('id', $article_category_id)->first();

        $article_category->update([
            'name' => Request::input('name'),
            'description' => Request::input('description'),
        ]);

        return redirect('/admin/article_categories/index')->with('success', 'Article Category Updated.');

    }

    public function delete($id)
    {
        $article = ArticleCategory::find($id);
        $article->delete();

        return redirect('/admin/article_categories/index');
    }
}
