@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/team/{{ $team->id }}">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="name"><b>Team Member Name</b></label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $team->name }}">
    </div>
    <div class="form-group col-md-12">
      <label for="surname"><b>Team Member Surname</b></label>
      <input type="text" class="form-control" id="surname" name="surname" value="{{ $team->surname }}">
    </div>
    <div class="form-group col-md-12">
      <label for="mission"><b>Team Member Mission</b></label>
      <input type="text" class="form-control" id="mission" name="mission" value="{{ $team->mission }}">
    </div>
    <div class="form-group col-md-12">
      <label for="facebook"><b>Team Member Facebook</b></label>
      <input type="url" class="form-control" id="facebook" name="facebook" value="{{ $team->facebook }}">
    </div>
    <div class="form-group col-md-12">
      <label for="instagram"><b>Team Member Instagram</b></label>
      <input type="url" class="form-control" id="instagram" name="instagram" value="{{ $team->instagram }}">
    </div>
    <div class="form-group col-md-12">
      <label for="twitter"><b>Team Member Twitter</b></label>
      <input type="url" class="form-control" id="twitter" name="twitter" value="{{ $team->twitter }}">
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Team Member Photo</b></label>
      <input type="file" class="form-control-file" id="image" name="image" value="{{ $team->image }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
