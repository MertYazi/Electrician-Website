@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/team" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    @error('member_exist')
    <p class="alert alert-danger">{{ $errors->first('member_exist') }}</p>
    @enderror
    <div class="form-group col-md-12">
      <label class="text-orange" for="member_name"><b>Team Member Name</b></label>
      <input type="text" class="form-control @error('member_name') is-invalid @enderror" id="member_name" name="member_name" value="{{ old('member_name') }}">
      @error('member_name')
      <p class="alert alert-danger">{{ $errors->first('member_name') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="member_surname"><b>Team Member Surname</b></label>
      <input type="text" class="form-control @error('member_surname') is-invalid @enderror" id="member_surname" name="member_surname" value="{{ old('member_surname') }}">
      @error('member_surname')
      <p class="alert alert-danger">{{ $errors->first('member_surname') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="member_mission"><b>Team Member Mission</b></label>
      <input type="text" class="form-control @error('member_mission') is-invalid @enderror" id="member_mission" name="member_mission" value="{{ old('member_mission') }}">
      @error('member_mission')
      <p class="alert alert-danger">{{ $errors->first('member_mission') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="member_facebook"><b>Team Member Facebook</b></label>
      <input type="url" class="form-control @error('member_facebook') is-invalid @enderror" id="member_facebook" name="member_facebook" value="{{ old('member_facebook') }}">
      @error('member_facebook')
      <p class="alert alert-danger">{{ $errors->first('member_facebook') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="member_instagram"><b>Team Member Instagram</b></label>
      <input type="url" class="form-control @error('member_instagram') is-invalid @enderror" id="member_instagram" name="member_instagram" value="{{ old('member_instagram') }}">
      @error('member_instagram')
      <p class="alert alert-danger">{{ $errors->first('member_instagram') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="member_twitter"><b>Team Member Twitter</b></label>
      <input type="url" class="form-control @error('member_twitter') is-invalid @enderror" id="member_twitter" name="member_twitter" value="{{ old('member_twitter') }}">
      @error('member_twitter')
      <p class="alert alert-danger">{{ $errors->first('member_twitter') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="member_image"><b>Team Member Photo</b></label>
      <input type="file" class="form-control-file @error('member_image') is-invalid @enderror" id="member_image" name="member_image" value="{{ old('member_image') }}" required>
      @error('member_image')
      <p class="alert alert-danger">{{ $errors->first('member_image') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
