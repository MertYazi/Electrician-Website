<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class SlideController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slides.admin_slides', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.admin_slides_create');
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
        $all_slides = Slide::all();
        $slide = new Slide();
        $slide->slide_caption = $request['slide_caption'];
        $slide->slide_text = $request['slide_text'];
        foreach ($all_slides as $single_slide) {
          if($request['slide_caption'] == $single_slide->slide_caption){
            return redirect()->back()->withInput()->withErrors(['slide_exist' => 'The slide already exist!']);
          }
        }
        $slide_name = str_replace(' ', '-', $request['slide_caption']);
        $slide->slide_image = $slide_name . '.' . $request['slide_image']->extension();
        $this->handle_image($request, $slide, 'slide_image');
        $slide->save();

        return redirect('/admin/slides');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('admin.slides.admin_slides_edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        $this->validate_data($request);
        $slide->slide_caption = $request['slide_caption'];
        $slide->slide_text = $request['slide_text'];
        if($request['slide_image'] != null){
          $this->handle_image($request, $slide, 'slide_image');
        }else{
          $slide_name = str_replace(' ', '-', $request['slide_caption']);
          $image_extension = explode('.', $slide->slide_image);
          $new_image_name = $slide_name . '.' . $image_extension[1];
          rename(public_path('img/' . $slide->slide_image), public_path('img/' . $new_image_name));
          $slide->slide_image = $new_image_name;
        }
        $slide->save();

        return redirect('/admin/slides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        if(file_exists(public_path('img/' . $slide->slide_image))){
          unlink(public_path('img/' . $slide->slide_image));
        }

        return redirect('/admin/slides');
    }

    public function validate_data(Request $request){

        $request->validate([
          'slide_caption' => 'required|between:2,255',
          'slide_text' => 'required|between:2,255',
          'slide_image' => 'image',
        ]);
    }
}
