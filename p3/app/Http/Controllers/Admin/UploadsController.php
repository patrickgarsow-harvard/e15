<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use App\Models\UploadCategory;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Carbon\Carbon;

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
        $upload_categories = UploadCategory::all();

        return Inertia::render('Admin/Uploads/Create', [
            'upload_categories' => $upload_categories,
        ]);
    }

    public function store(Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'upload' =>['nullable','mimes:jpg,bmp,png,tiff,pdf,doc,docx,xls,xlsx'],
            'version'=> ['nullable'],
            'description' => ['nullable'],
            'keywords' => ['nullable'],
        ]);

        //Build Out Unique Filename from form data and upload time.
        $uploadedFilename = time().'-'.Str::slug(Request::input('name'), '_').'.'.Request::file('upload')->extension();

        //Define the file path where the file should be stored.
        $uploadedFilePath = public_path('assets\files');

        //Move the file to the publically available area.
        Request::file('upload')->move($uploadedFilePath, $uploadedFilename);

        //Store Form Data with File Upload specifics into the database.
        $upload_info = Upload::create([
            'name' => Request::input('name'),
            'slug' => Str::slug(Request::input('name'), '-'),
            'version' => Request::input('version'),
            'description' => Request::input('description'),
            'keywords' => Request::input('keywords'),
            'upload_datetime' => Carbon::now(),
            'filename' => $uploadedFilename,
            'path' => $uploadedFilePath,
        ]);

        //dd($upload_info);

        ##Debug Request##
        // dd(Request::input('name'));

         return redirect('admin/uploads/index');
    }

    public function edit($id)
    {

        $upload = Upload::where('id', $id)->first();

        return Inertia::render('Admin/Uploads/Edit', [
            'upload' => [
                'id' => $upload->id,
                'name' => $upload->name,
                'description' => $upload->description,
                'filename' => $upload->filename,
                'path' => $upload->path,
                'keywords' => $upload->keywords,
                'page_content' => $upload->page_content,
                'hidden' => $upload->hidden,
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

    public function delete($id)
    {
        $upload = Upload::find($id);

        $removeFilePath = $upload->path;
        $removeFilename = $upload->filename;
        //dd($removeFile);
        File::delete($removeFilePath.'\\'.$removeFilename);
        $upload->delete();

        return redirect('/admin/uploads/index');
    }
}
