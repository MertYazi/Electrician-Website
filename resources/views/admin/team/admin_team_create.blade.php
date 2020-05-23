@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/team">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="name"><b>Team Member Name</b></label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group col-md-12">
      <label for="surname"><b>Team Member Surname</b></label>
      <input type="text" class="form-control" id="surname" name="surname">
    </div>
    <div class="form-group col-md-12">
      <label for="mission"><b>Team Member Mission</b></label>
      <input type="text" class="form-control" id="mission" name="mission">
    </div>
    <div class="form-group col-md-12">
      <label for="facebook"><b>Team Member Facebook</b></label>
      <input type="url" class="form-control" id="facebook" name="facebook">
    </div>
    <div class="form-group col-md-12">
      <label for="instagram"><b>Team Member Instagram</b></label>
      <input type="url" class="form-control" id="instagram" name="instagram">
    </div>
    <div class="form-group col-md-12">
      <label for="twitter"><b>Team Member Twitter</b></label>
      <input type="url" class="form-control" id="twitter" name="twitter">
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Team Member Photo</b></label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
