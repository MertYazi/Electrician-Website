<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Traits\ImageTrait;

class TeamController extends Controller
{
    use ImageTrait;
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
        $this->validate_data($request);
        $all_members = Team::all();
        $team = new Team();
        $team->member_name = $request['member_name'];
        $team->member_surname = $request['member_surname'];
        $team->member_mission = $request['member_mission'];
        $team->member_facebook = $request['member_facebook'];
        $team->member_instagram = $request['member_instagram'];
        $team->member_twitter = $request['member_twitter'];
        foreach ($all_members as $single_member) {
          if($request['member_name'] == $single_member->member_name && $request['member_surname'] == $single_member->member_surname){
            return redirect()->back()->withInput()->withErrors(['member_exist' => 'The team member already exist!']);
          }
        }
        $team->member_image = $request['member_name'] . '-' . $request['member_surname'] . '.' . $request['member_image']->extension();
        $this->handle_image($request, $team, 'member_image');
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
        $this->validate_data($request);
        $team->member_name = $request['member_name'];
        $team->member_surname = $request['member_surname'];
        $team->member_mission = $request['member_mission'];
        $team->member_facebook = $request['member_facebook'];
        $team->member_instagram = $request['member_instagram'];
        $team->member_twitter = $request['member_twitter'];
        if($request['member_image'] != null){
          $this->handle_image($request, $team, 'member_image');
        }else{
          $image_extension = explode('.', $team->member_image);
          $new_image_name = $request['member_name'] . '-' . $request['member_surname'] . '.' . $image_extension[1];
          rename(public_path('img/' . $team->member_image), public_path('img/' . $new_image_name));
          $team->member_image = $new_image_name;
        }
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
        if(file_exists(public_path('img/' . $team->member_image))){
          unlink(public_path('img/' . $team->member_image));
        }
        
        return redirect('/admin/team');
    }

    public function validate_data(Request $request){

        $request->validate([
          'member_name' => 'required|between:2,255',
          'member_surname' => 'required|between:2,255',
          'member_mission' => 'required|between:2,255',
          'member_facebook' => 'required|url',
          'member_instagram' => 'required|url',
          'member_twitter' => 'required|url',
          'member_image' => 'image',
        ]);
    }

}
