@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/services/{{ $service->id }}">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="title"><b>Service Title</b> </label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
    </div>
    <div class="form-group col-md-12">
      <label for="description"><b>Service Description</b> </label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}">
    </div>
    <div class="form-group col-md-12">
      <label for="text"><b>Service Text</b> </label>
      <textarea class="form-control" id="text" name="text" rows="3">{{ $service->text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="importance"><b>Service Importance</b> </label>
      <input type="text" class="form-control" id="importance" name="importance" value="{{ $service->importance }}">
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Service Image</b> </label>
      <input type="file" class="form-control-file" id="image" name="image" value="{{ $service->image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="cover"><b>Service Cover</b> </label>
      <input type="file" class="form-control-file" id="cover" name="cover" value="{{ $service->cover }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
