@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/services/{{ $service->id }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="service_title"><b>Service Title</b> </label>
      <input type="text" class="form-control" id="service_title" name="service_title" value="{{ $service->service_title }}">
    </div>
    <div class="form-group col-md-12">
      <label for="service_description"><b>Service Description</b> </label>
      <input type="text" class="form-control" id="service_description" name="service_description" value="{{ $service->service_description }}">
    </div>
    <div class="form-group col-md-12">
      <label for="service_text"><b>Service Text</b> </label>
      <textarea class="form-control" id="service_text" name="service_text" rows="3">{{ $service->service_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="service_importance"><b>Service Importance</b> </label>
      <select class="custom-select" id="service_importance" name="service_importance">
          @if ($service->service_importance === 0)
            <option selected value="0">Low</option>
            <option value="1">High</option>
          @else
            <option selected value="1">High</option>
            <option value="0">Low</option>
          @endif
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="service_image"><b>Service Image</b> </label>
      <input type="file" class="form-control-file" id="service_image" name="service_image" value="{{ $service->service_image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="service_cover"><b>Service Cover</b> </label>
      <input type="file" class="form-control-file" id="service_cover" name="service_cover" value="{{ $service->service_cover }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
