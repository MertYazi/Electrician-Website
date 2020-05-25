<?php

namespace App\Http\Controllers;

use App\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $help = Help::findOrFail(1);
        return view('admin.help.admin_help', compact('help'));
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
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function show(Help $help)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function edit(Help $help)
    {
        return view('admin.help.admin_help_edit', compact('help'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help $help)
    {
        $help->help_caption=$request['help_caption'];
        $help->help_keywords=$request['help_keywords'];
        $help->decide_text=$request['decide_text'];
        if($request['decide_image'] != null){
        $help->decide_image=$request['decide_image'];}
        $help->reach_text=$request['reach_text'];
        if($request['reach_image'] != null){
        $help->reach_image=$request['reach_image'];}
        $help->consult_text=$request['consult_text'];
        if($request['consult_image'] != null){
        $help->consult_image=$request['consult_image'];}
        $help->get_service_text=$request['get_service_text'];
        if($request['get_service_image'] != null){
        $help->get_service_image=$request['get_service_image'];}
        $help->save();
        return redirect('/admin/help');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Help  $help
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help $help)
    {
        //
    }
}
