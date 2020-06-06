<?php

namespace App\Http\Controllers;

use App\Generation;
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
        $generation = Generation::findOrFail(1);
        return view('admin.generations.admin_generations', compact('generation'));
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
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function show(Generation $generation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function edit(Generation $generation)
    {
        return view('admin.generations.admin_generations_edit', compact('generation'));
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
        //
    }

    public function validate_data(Request $request){

        $request->validate([
          'generation_text' => 'required|between:2,255',
          'generation_origin' => 'required|size:4',
          'generation_caption' => 'required|between:2,255',
          'generation_image' => 'image',
        ]);
    }
}
