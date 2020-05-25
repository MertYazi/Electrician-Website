@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/services">
  @csrf

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="service_title"><b>Service Title</b> </label>
      <input type="text" class="form-control" id="service_title" name="service_service_title">
    </div>
    <div class="form-group col-md-12">
      <label for="service_description"><b>Service Description</b> </label>
      <input type="text" class="form-control" id="service_description" name="service_description">
    </div>
    <div class="form-group col-md-12">
      <label for="service_text"><b>Service Text</b> </label>
      <textarea class="form-control" id="service_text" name="service_text" rows="3"></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="service_importance"><b>Service Importance</b> </label>
      <input type="text" class="form-control" id="service_importance" name="service_importance">
    </div>
    <div class="form-group col-md-12">
      <label for="service_image"><b>Service Image</b> </label>
      <input type="file" class="form-control-file" id="service_image" name="service_image">
    </div>
    <div class="form-group col-md-12">
      <label for="service_cover"><b>Service Cover</b> </label>
      <input type="file" class="form-control-file" id="service_cover" name="service_cover">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
