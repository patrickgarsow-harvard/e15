<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UploadCategory;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Inertia\Inertia;

class UploadCategoriesController extends Controller
{
    public function index()
    {
        $upload_categories = UploadCategory::all();

        return Inertia::render('Admin/UploadCategories/Index', [
            'upload_categories' => $upload_categories,
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/UploadCategories/Create', []);
    }

    public function store(Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        UploadCategory::create([
            'name' => Request::input('name'),
            'description' => Request::input('description'),
        ]);

         return redirect('admin/upload_categories/index');
    }

    public function edit($id)
    {

        $upload_category = UploadCategory::where('id', $id)->first();
        //dd($department);
        return Inertia::render('Admin/ArticleCategories/Edit', [
            'article_category' => [
                'id' => $article_category->id,
                'name' => $article_category->name,
                'description' => $article_category->description,
            ],
          ]);

    }

    public function update($id, Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'description' => ['nullable'],
        ]);

        $article_category = ArticleCategory::where('id', $id)->first();

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
