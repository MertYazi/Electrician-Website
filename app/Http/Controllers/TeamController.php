<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.admin_team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.admin_team_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->member_name = $request['member_name'];
        $team->member_surname = $request['member_surname'];
        $team->member_mission = $request['member_mission'];
        $team->member_facebook = $request['member_facebook'];
        $team->member_instagram = $request['member_instagram'];
        $team->member_twitter = $request['member_twitter'];
        if($request['member_image'] != null){
        $team->member_image = $request['member_image'];}
        $team->save();
        return redirect('/admin/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.admin_team_edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->member_name = $request['member_name'];
        $team->member_surname = $request['member_surname'];
        $team->member_mission = $request['member_mission'];
        $team->member_facebook = $request['member_facebook'];
        $team->member_instagram = $request['member_instagram'];
        $team->member_twitter = $request['member_twitter'];
        if($request['member_image'] != null){
        $team->member_image = $request['member_image'];}
        $team->save();
        return redirect('/admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect('/admin/team');
    }
}
