@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/site/1">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="site_name"><b>Site Name</b></label>
      <input type="text" class="form-control" id="site_name" name="site_name" value="{{ $site->site_name }}">
    </div>
    <div class="form-group col-md-12">
      <label for="site_year"><b>Site Year</b></label>
      <input type="number" class="form-control" id="site_year" name="site_year" value="{{ $site->site_year }}">
    </div>
    <div class="form-group col-md-12">
      <label for="site_description"><b>Site Description</b></label>
      <textarea class="form-control" id="site_description" name="site_description" rows="3">{{ $site->site_description }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="references_caption"><b>References Caption</b></label>
      <input type="text" class="form-control" id="references_caption" name="references_caption" value="{{ $site->references_caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="references_cover"><b>References Cover</b></label>
      <input type="file" class="form-control-file" id="references_cover" name="references_cover" value="{{ $site->references_cover }}">
    </div>
    <div class="form-group col-md-12">
      <label for="about_caption"><b>About Caption</b></label>
      <input type="text" class="form-control" id="about_caption" name="about_caption" value="{{ $site->about_caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="about_cover"><b>About Cover</b></label>
      <input type="file" class="form-control-file" id="about_cover" name="about_cover" value="{{ $site->about_cover }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_caption"><b>Contact Caption</b></label>
      <input type="text" class="form-control" id="contact_caption" name="contact_caption" value="{{ $site->contact_caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_cover"><b>Contact Cover</b></label>
      <input type="file" class="form-control-file" id="contact_cover" name="contact_cover" value="{{ $site->contact_cover }}">
    </div>
    <div class="form-group col-md-12">
      <label for="services_caption"><b>Services Caption</b></label>
      <input type="text" class="form-control" id="services_caption" name="services_caption" value="{{ $site->services_caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="services_cover"><b>Services Cover</b></label>
      <input type="file" class="form-control-file" id="services_cover" name="services_cover" value="{{ $site->services_cover }}">
    </div>
    <div class="form-group col-md-12">
      <label for="team_caption"><b>Team Caption</b></label>
      <input type="text" class="form-control" id="team_caption" name="team_caption" value="{{ $site->team_caption }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
