<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Employee;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
//Country,State,City Data


class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return Inertia::render('Admin/Contacts/Index', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/Contacts/Create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contact::create(
            Request::validate([
                'company' => [],
                'first_name' => ['required'],
                'middle_name' => [],
                'last_name' => ['required'],
                'name_suffix' => [],
                'nickname' => [],
                'dob' => [],
                'address' => [],
                'address2' => [],
                'city' => [],
                'state' => [],
                'zip' => [],
                'zipext' => [],
                'mail_address' => [],
                'mail_address2' => [],
                'mail_city' => [],
                'mail_state' => [],
                'mail_zip' => [],
                'mail_zipext' => [],
                'primary_email' => [],
                'alt_email' => [],
                'cell_phone' => [],
                'primary_phone' => [],
                'work_phone' => [],
                'fax' => [],
                'website' => [],
                'twitter_handle' => [],
                'facebook_handle' => [],
                'instagram_handle' => [],
                'linkedin_handle' => [],
                'verified' => [],
                'archived' => [],
                'hidden' => [],
           ])
         );

         return redirect('admin/contacts/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($contact_id)
    {
        $contact = Contact::where('id', $contact_id)->first();
        $employee = Employee::where('contact_id', $contact_id)->first();
        //dd($contact);
        return Inertia::render('Admin/Contacts/Edit', [
            // 'contact' => $this->$contact->all(),
            'contact' => $contact,
            'employee' => $employee,
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update($contact_id, Request $request)
    {
        $contact = Contact::where('id', $contact_id)->first();

        $contact->update(
            Request::validate([
                'company' => [],
                'first_name' => ['required'],
                'middle_name' => [],
                'last_name' => ['required'],
                'name_suffix' => [],
                'nickname' => [],
                'dob' => [],
                'address' => [],
                'address2' => [],
                'city' => [],
                'state' => [],
                'zip' => [],
                'zipext' => [],
                'mail_address' => [],
                'mail_address2' => [],
                'mail_city' => [],
                'mail_state' => [],
                'mail_zip' => [],
                'mail_zipext' => [],
                'primary_email' => [],
                'alt_email' => [],
                'cell_phone' => [],
                'primary_phone' => [],
                'work_phone' => [],
                'fax' => [],
                'website' => [],
                'twitter_handle' => [],
                'facebook_handle' => [],
                'instagram_handle' => [],
                'linkedin_handle' => [],
                'verified' => [],
                'archived' => [],
                'hidden' => [],
            ])
        );

        if(Request::has('is_employee')){
            //Check to see if contact is in employee database
            if(Employee::where('contact_id', "=", $contact_id)->count() == 0){
                Employee::create([
                    'contact_id' => $contact_id,
                ]);
                //dd($contact_id);
            }
        }

        return redirect('/admin/contacts/index')->with('success', 'Department updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {

    }
}
