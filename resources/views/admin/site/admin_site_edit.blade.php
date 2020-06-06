@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/site/1" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="site_name"><b>Site Name</b></label>
      <input type="text" class="form-control @error('site_name') is-invalid @enderror" id="site_name" name="site_name" value="{{ $site->site_name }}">
      @error('site_name')
      <p class="alert alert-danger">{{ $errors->first('site_name') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="site_year"><b>Site Year</b></label>
      <input type="number" class="form-control @error('site_year') is-invalid @enderror" id="site_year" name="site_year" value="{{ $site->site_year }}">
      @error('site_year')
      <p class="alert alert-danger">{{ $errors->first('site_year') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="site_description"><b>Site Description</b></label>
      <textarea class="form-control @error('site_description') is-invalid @enderror" id="site_description" name="site_description" rows="3">{{ $site->site_description }}</textarea>
      @error('site_description')
      <p class="alert alert-danger">{{ $errors->first('site_description') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="references_caption"><b>References Caption</b></label>
      <input type="text" class="form-control @error('references_caption') is-invalid @enderror" id="references_caption" name="references_caption" value="{{ $site->references_caption }}">
      @error('references_caption')
      <p class="alert alert-danger">{{ $errors->first('references_caption') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="references_cover"><b>References Cover</b></label>
      <input type="file" class="form-control-file @error('references_cover') is-invalid @enderror" id="references_cover" name="references_cover" value="{{ $site->references_cover }}">
      @error('references_cover')
      <p class="alert alert-danger">{{ $errors->first('references_cover') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="about_caption"><b>About Caption</b></label>
      <input type="text" class="form-control @error('about_caption') is-invalid @enderror" id="about_caption" name="about_caption" value="{{ $site->about_caption }}">
      @error('about_caption')
      <p class="alert alert-danger">{{ $errors->first('about_caption') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="about_cover"><b>About Cover</b></label>
      <input type="file" class="form-control-file @error('about_cover') is-invalid @enderror" id="about_cover" name="about_cover" value="{{ $site->about_cover }}">
      @error('about_cover')
      <p class="alert alert-danger">{{ $errors->first('about_cover') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="contact_caption"><b>Contact Caption</b></label>
      <input type="text" class="form-control @error('contact_caption') is-invalid @enderror" id="contact_caption" name="contact_caption" value="{{ $site->contact_caption }}">
      @error('contact_caption')
      <p class="alert alert-danger">{{ $errors->first('contact_caption') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="contact_cover"><b>Contact Cover</b></label>
      <input type="file" class="form-control-file @error('contact_cover') is-invalid @enderror" id="contact_cover" name="contact_cover" value="{{ $site->contact_cover }}">
      @error('contact_cover')
      <p class="alert alert-danger">{{ $errors->first('contact_cover') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="services_caption"><b>Services Caption</b></label>
      <input type="text" class="form-control @error('services_caption') is-invalid @enderror" id="services_caption" name="services_caption" value="{{ $site->services_caption }}">
      @error('services_caption')
      <p class="alert alert-danger">{{ $errors->first('services_caption') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="services_cover"><b>Services Cover</b></label>
      <input type="file" class="form-control-file @error('services_cover') is-invalid @enderror" id="services_cover" name="services_cover" value="{{ $site->services_cover }}">
      @error('services_cover')
      <p class="alert alert-danger">{{ $errors->first('services_cover') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="team_caption"><b>Team Caption</b></label>
      <input type="text" class="form-control @error('team_caption') is-invalid @enderror" id="team_caption" name="team_caption" value="{{ $site->team_caption }}">
      @error('team_caption')
      <p class="alert alert-danger">{{ $errors->first('team_caption') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
