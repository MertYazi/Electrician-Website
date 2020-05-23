<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
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
        $site->site_name=$request['site_name'];
        $site->site_year=$request['site_year'];
        $site->description=$request['description'];
        $site->references_caption=$request['references_caption'];
        if($request['references_cover'] != null){
        $site->references_cover=$request['references_cover'];}
        $site->about_caption=$request['about_caption'];
        if($request['about_cover'] != null){
        $site->about_cover=$request['about_cover'];}
        $site->contact_caption=$request['contact_caption'];
        if($request['contact_cover'] != null){
        $site->contact_cover=$request['contact_cover'];}
        $site->services_caption=$request['services_caption'];
        if($request['services_cover'] != null){
        $site->services_cover=$request['services_cover'];}
        $site->team_caption=$request['team_caption'];
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
}
