<?php

namespace App\Http\Controllers;

use App\About;
use App\Site;
use App\Contact;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class AboutController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $about = About::first();
      $site = Site::first();
      $contact = Contact::first();

      return view('admin.about.admin_about', compact('about', 'site', 'contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/admin/about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/admin/about');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return redirect('/admin/about');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $site = Site::first();
        $contact = Contact::first();

        return view('admin.about.admin_about_edit', compact('about', 'site', 'contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $this->validate_data($request);
        $about->history_text=$request['history_text'];
        if($request['history_image'] != null){
          $this->handle_image($request, $about, 'history_image');
        }
        $about->mission_text=$request['mission_text'];
        if($request['mission_image'] != null){
          $this->handle_image($request, $about, 'mission_image');
        }
        $about->vision_text=$request['vision_text'];
        if($request['vision_image'] != null){
          $this->handle_image($request, $about, 'vision_image');
        }
        $about->save();

        return redirect('/admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        return redirect('/admin/about');
    }

    public function validate_data(Request $request){

        $request->validate([
          'history_text' => 'required|min:2',
          'mission_text' => 'required|min:2',
          'vision_text' => 'required|min:2',
          'history_image' => 'image',
          'mission_image' => 'image',
          'vision_image' => 'image',
        ]);
    }
}
