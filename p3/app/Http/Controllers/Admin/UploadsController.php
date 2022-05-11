<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Inertia\Inertia;

class UploadsController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();
        return Inertia::render('Admin/Uploads/Index', [
            'uploads' => $uploads,
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Uploads/Create', []);
    }

    public function store(Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'version'=> ['nullable'],
            'description' => ['nullable'],
            'upload_category_id' => ['nullable'],
            'keywords' => ['nullable'],
        ]);

        Article::create([
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

         return redirect('admin/articles/index');
    }

    public function edit($article_id)
    {

        $article = Article::where('id', $article_id)->first();

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

    public function delete($article_id)
    {
        $article = Article::find($article_id);
        $article->delete();

        return redirect('/admin/article_categories/index');
    }
}
