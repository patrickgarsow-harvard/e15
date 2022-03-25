<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
    //   $departments = DB::table('departments')->get();
      return Inertia::render('Admin/Departments/Index', [
        'departments' => $departments,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return Inertia::render('Admin/Departments/Create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Department::create(
           Request::validate([
            'name' => ['required'],
          ])
        );

        return redirect('admin/departments/index');
        //$department = new department();
        //$department = Input::all();
        //dd($department);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($department_id)
    {

        $department = Department::where('id', $department_id)->first();
        //dd($department);
        return Inertia::render('Admin/Departments/Edit', [
            'department' => [
                'id' => $department->id,
                'name' => $department->name,
                'description' => $department->description,
                'phone' => $department->phone,
                'extension' => $department->extension,
                'email' => $department->email,
                'page_content' => $department->page_content,
                'hidden' => $department->hidden,
            ],
          ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update($department_id, Request $request)
    {
        $department = Department::where('id', $department_id)->first();
        // //dd($department);
        // $department->name = $request->input('name');
        // $department->description = $request->input('description');
        // $department->phone = $request->input('phone');
        // $department->extension = $request->input('extension');
        // $department->email = $requestion->input('email');
        // $department->update();
        $department->update(
            Request::validate([
                'name' => ['required'],
                'description' => [],
                'phone' => [],
                'extension' => [],
                'email' => [],
                'page_content' =>[],
                'hidden' => [],
            ])
            );

        return redirect('/admin/departments/index')->with('success', 'Department updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function delete($department_id)
    {
        $department = Department::find($department_id);
        $department->delete();

        return redirect('/admin/departments/index');
    }
}
