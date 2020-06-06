<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class SiteController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site = Site::findOrFail(1);
        return view('admin.site.admin_site', compact('site'));
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
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit(Site $site)
    {
        return view('admin.site.admin_site_edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        $this->validate_data($request);
        $site->site_name = $request['site_name'];
        $site->site_year = $request['site_year'];
        $site->site_description = $request['site_description'];
        $site->references_caption = $request['references_caption'];
        if($request['references_cover'] != null){
          $this->handle_image($request, $site, 'references_cover');
        }
        $site->about_caption = $request['about_caption'];
        if($request['about_cover'] != null){
          $this->handle_image($request, $site, 'about_cover');
        }
        $site->contact_caption = $request['contact_caption'];
        if($request['contact_cover'] != null){
          $this->handle_image($request, $site, 'contact_cover');
        }
        $site->services_caption = $request['services_caption'];
        if($request['services_cover'] != null){
          $this->handle_image($request, $site, 'services_cover');
        }
        $site->team_caption = $request['team_caption'];
        $site->save();
        
        return redirect('/admin/site');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        //
    }

    public function validate_data(Request $request){

        $request->validate([
          'site_name' => 'required|between:2,255',
          'site_year' => 'required|size:4',
          'site_description' => 'required|between:2,255',
          'references_caption' => 'required|between:2,255',
          'about_caption' => 'required|between:2,255',
          'contact_caption' => 'required|between:2,255',
          'services_caption' => 'required|between:2,255',
          'team_caption' => 'required|between:2,255',
          'references_cover' => 'image',
          'about_cover' => 'image',
          'contact_cover' => 'image',
          'services_cover' => 'image',
        ]);
    }

}
