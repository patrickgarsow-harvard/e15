<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Carbon\Carbon;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return Inertia::render('Admin/Events/Index', [
            'events' => $events,
        ]);
    }

    public function past()
    {
        $events = Event::where('start_datetime', '<=', Carbon::now())->andWhere('end_datetime', '<=', Carbon::now());
        return Inertia::render('Admin/Events/Index', [
            'events' => $events,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Events/Create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request::validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'page_content' => ['required'],
            'gallery_id' => ['nullable'],
            'keywords' => ['nullable'],
        ]);

        Event::create([
            'name' => Request::input('name'),
            'slug' => Str::slug(Request::input('name'), '-'),
            'description' => Request::input('description'),
            'page_content' => Request::input('page_content'),
            'gallery_id' => Request::input('gallery_id'),
            'event_category_id' => Request::input('event_category_id'),
            'start_datetime' => Request::input('start_datetime'),
            'end_datetime' => Request::input('end_datetime'),
        ]);

        return redirect('admin/events/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::where('id', $id)->first();

        return Inertia::render('Admin/Events/Edit', [
            'event' => [
                'id' => $event->id,
                'name' => $department->name,
                'description' => $department->description,
                'phone' => $department->phone,
                'extension' => $department->extension,
                'email' => $department->email,
                'page_content' => $department->page_content,
                'hidden' => $event->hidden,
                'listed' => $event->hidden,
            ],
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $event = Department::find($id);
        $event->delete();

        return redirect('/admin/events/index');
    }
}
