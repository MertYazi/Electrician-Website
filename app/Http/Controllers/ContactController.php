<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class ContactController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::findOrFail(1);
        return view('admin.contact.admin_contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.admin_contact_edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->contact_text=$request['contact_text'];
        $contact->contact_address_short=$request['contact_address_short'];
        $contact->contact_address_long=$request['contact_address_long'];
        $contact->contact_email=$request['contact_email'];
        $contact->contact_phone=$request['contact_phone'];
        $contact->contact_fax=$request['contact_fax'];
        $contact->contact_facebook_link=$request['contact_facebook_link'];
        $contact->contact_twitter_link=$request['contact_twitter_link'];
        $contact->contact_googleplus_link=$request['contact_googleplus_link'];
        $contact->contact_linkedin_link=$request['contact_linkedin_link'];
        $contact->contact_instagram_link=$request['contact_instagram_link'];
        $contact->save();
        return redirect('/admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
