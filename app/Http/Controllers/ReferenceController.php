<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class ReferenceController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = Reference::all();
        return view('admin.references.admin_references', compact('references'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.references.admin_references_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reference = new Reference();
        $reference->reference_title = $request['reference_title'];

        if($request['reference_image'] != null){
          $reference_name = str_replace(' ', '-', $request['reference_title']);
          $reference->reference_image = $reference_name . '.' . $request['reference_image']->extension();
          $this->handle_image($request, $reference, 'reference_image');
        }

        $reference->reference_link = $request['reference_link'];
        $reference->save();

        return redirect('/admin/references');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit(Reference $reference)
    {
        return view('admin.references.admin_references_edit', compact('reference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reference $reference)
    {
        $reference->reference_title = $request['reference_title'];

        if($request['reference_image'] != null){
          $this->handle_image($request, $reference, 'reference_image');
        }else{
          $reference_name = str_replace(' ', '-', $request['reference_title']);
          $image_extension = explode('.', $reference->reference_image);
          $new_image_name = $reference_name . '.' . $image_extension[1];
          rename(public_path('img/' . $reference->reference_image), public_path('img/' . $new_image_name));
          $reference->reference_image = $new_image_name;
        }

        $reference->reference_link = $request['reference_link'];
        $reference->save();

        return redirect('/admin/references');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reference $reference)
    {
        $reference->delete();
        if(file_exists(public_path('img/' . $reference->reference_image))){
          unlink(public_path('img/' . $reference->reference_image));
        }

        return redirect('/admin/references');
    }
}
