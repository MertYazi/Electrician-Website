@extends('layouts.admin')

@section('content')

<form >
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="site_name"><b>Site Name:</b> {{ $site->site_name }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="site_year"><b>Site Year:</b> {{ $site->site_year }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="description"><b>Site Description:</b> {{ $site->description }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="references_caption"><b>References Caption:</b> {{ $site->references_caption }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="references_cover"><b>References Cover:</b> {{ $site->references_cover }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="about_caption"><b>About Caption:</b> {{ $site->about_caption }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="about_cover"><b>About Cover:</b> {{ $site->about_cover }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_caption"><b>Contact Caption:</b> {{ $site->contact_caption }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_cover"><b>Contact Cover:</b> {{ $site->contact_cover }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="services_caption"><b>Services Caption:</b> {{ $site->services_caption }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="services_cover"><b>Services Cover:</b> {{ $site->services_cover }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="team_caption"><b>Team Caption:</b> {{ $site->team_caption }}</label>
    </div>
  </div>
  <a class="btn btn-primary" href="/admin/site/1/edit" role="button">Edit</a>
</form>

@endsection
