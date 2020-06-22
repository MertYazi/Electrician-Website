<?php

namespace App\Http\Controllers;

use App\Generation;
use App\Site;
use App\Contact;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class GenerationController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generation = Generation::first();
        $site = Site::first();
        $contact = Contact::first();

        return view('admin.generations.admin_generations', compact('generation', 'site', 'contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/admin/generations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/admin/generations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function show(Generation $generation)
    {
        return redirect('/admin/generations');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function edit(Generation $generation)
    {
        $site = Site::first();
        $contact = Contact::first();

        return view('admin.generations.admin_generations_edit', compact('generation', 'site', 'contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generation $generation)
    {
        $this->validate_data($request);
        $generation->generation_text=$request['generation_text'];
        $generation->generation_caption=$request['generation_caption'];
        if($request['generation_image'] != null){
          $this->handle_image($request, $generation, 'generation_image');
        }
        $generation->generation_origin=$request['generation_origin'];
        $generation->save();

        return redirect('/admin/generations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generation $generation)
    {
        return redirect('/admin/generations');
    }

    public function validate_data(Request $request){

        $request->validate([
          'generation_text' => 'required|min:2',
          'generation_origin' => 'required|size:4',
          'generation_caption' => 'required|between:2,255',
          'generation_image' => 'image',
        ]);
    }
}
