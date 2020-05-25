<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.admin_services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.admin_services_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->service_title = $request['service_title'];
        $service->service_description = $request['service_description'];
        $service->service_text = $request['service_text'];
        $service->service_importance = $request['service_importance'];
        if($request['service_image'] != null){
        $service->service_image = $request['service_image'];}
        if($request['service_cover'] != null){
        $service->service_cover = $request['service_cover'];}
        $service->save();

        return redirect('/admin/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.admin_services_edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->service_title = $request['service_title'];
        $service->service_description = $request['service_description'];
        $service->service_text = $request['service_text'];
        $service->service_importance = $request['service_importance'];
        if($request['service_image'] != null){
        $service->service_image = $request['service_image'];}
        if($request['service_cover'] != null){
        $service->service_cover = $request['service_cover'];}
        $service->save();

        return redirect('/admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('/admin/services');
    }
}
