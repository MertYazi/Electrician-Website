@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/services">
  @csrf
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="title"><b>Service Title</b> </label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group col-md-12">
      <label for="description"><b>Service Description</b> </label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="form-group col-md-12">
      <label for="text"><b>Service Text</b> </label>
      <textarea class="form-control" id="text" name="text" rows="3"></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="importance"><b>Service Importance</b> </label>
      <input type="text" class="form-control" id="importance" name="importance">
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Service Image</b> </label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>
    <div class="form-group col-md-12">
      <label for="cover"><b>Service Cover</b> </label>
      <input type="file" class="form-control-file" id="cover" name="cover">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
