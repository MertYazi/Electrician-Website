<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Site;
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
        $contact = Contact::first();
        $site = Site::first();

        return view('admin.contact.admin_contact', compact('contact', 'site'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/admin/contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/admin/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return redirect('/admin/contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $site = Site::first();

        return view('admin.contact.admin_contact_edit', compact('contact', 'site'));
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
        $this->validate_data($request);
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
        return redirect('/admin/contact');
    }

    public function validate_data(Request $request){

        $request->validate([
          'contact_text' => 'required|min:2',
          'contact_address_short' => 'required|between:2,255',
          'contact_address_long' => 'required|between:2,255',
          'contact_email' => 'required|email:rfc,dns',
          'contact_phone' => 'required|size:11',
          'contact_fax' => 'required|size:11',
          'contact_facebook_link' => 'required|url',
          'contact_twitter_link' => 'required|url',
          'contact_googleplus_link' => 'required|url',
          'contact_linkedin_link' => 'required|url',
          'contact_instagram_link' => 'required|url',
        ]);
    }
}
