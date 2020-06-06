<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class ServiceController extends Controller
{
    use ImageTrait;
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
        $this->validate_data($request);
        $all_services = Service::all();
        $service = new Service();
        $service->service_title = $request['service_title'];
        $service->service_description = $request['service_description'];
        $service->service_text = $request['service_text'];
        $service->service_importance = $request['service_importance'];
        foreach ($all_services as $single_service) {
          if($request['service_title'] == $single_service->service_title){
            return redirect()->back()->withInput()->withErrors(['service_exist' => 'The service already exist!']);
          }
        }
        if($request['service_image'] != null){
          $service_name = str_replace(' ', '-', $request['service_title']);
          $service->service_image = $service_name . '.' . $request['service_image']->extension();
          $this->handle_image($request, $service, 'service_image');
        }

        if($request['service_cover'] != null){
          $service_name = str_replace(' ', '-', $request['service_title']);
          $service->service_cover = $service_name . '-cover' . '.' . $request['service_cover']->extension();
          $this->handle_image($request, $service, 'service_cover');
        }
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
        $this->validate_data($request);
        $service->service_title = $request['service_title'];
        $service->service_description = $request['service_description'];
        $service->service_text = $request['service_text'];
        $service->service_importance = $request['service_importance'];
        if($request['service_image'] != null){
          $this->handle_image($request, $service, 'service_image');
        }else{
          $service_name = str_replace(' ', '-', $request['service_title']);
          $image_extension = explode('.', $service->service_image);
          $new_image_name = $service_name . '.' . $image_extension[1];
          rename(public_path('img/' . $service->service_image), public_path('img/' . $new_image_name));
          $service->service_image = $new_image_name;
        }
        if($request['service_cover'] != null){
          $this->handle_image($request, $service, 'service_cover');
        }else{
          $service_name = str_replace(' ', '-', $request['service_title']);
          $image_extension = explode('.', $service->service_cover);
          $new_image_name = $service_name . '-cover' . '.' . $image_extension[1];
          rename(public_path('img/' . $service->service_cover), public_path('img/' . $new_image_name));
          $service->service_cover = $new_image_name;
        }
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
        if(file_exists(public_path('img/' . $service->service_image))){
          unlink(public_path('img/' . $service->service_image));
        }
        if(file_exists(public_path('img/' . $service->service_cover))){
          unlink(public_path('img/' . $service->service_cover));
        }

        return redirect('/admin/services');
    }

    public function validate_data(Request $request){

        $request->validate([
          'service_title' => 'required|between:2,255',
          'service_description' => 'required|between:2,255',
          'service_text' => 'required|between:2,255',
          'service_image' => 'image',
          'service_cover' => 'image',
        ]);
    }
}
