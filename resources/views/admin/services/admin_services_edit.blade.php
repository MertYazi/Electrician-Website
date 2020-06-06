@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/services/{{ $service->id }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="service_title"><b>Service Title</b> </label>
      <input type="text" class="form-control @error('service_title') is-invalid @enderror" id="service_title" name="service_title" value="{{ $service->service_title }}">
      @error('service_title')
      <p class="alert alert-danger">{{ $errors->first('service_title') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="service_description"><b>Service Description</b> </label>
      <input type="text" class="form-control @error('service_description') is-invalid @enderror" id="service_description" name="service_description" value="{{ $service->service_description }}">
      @error('service_description')
      <p class="alert alert-danger">{{ $errors->first('service_description') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="service_text"><b>Service Text</b> </label>
      <textarea class="form-control @error('service_text') is-invalid @enderror" id="service_text" name="service_text" rows="3">{{ $service->service_text }}</textarea>
      @error('service_text')
      <p class="alert alert-danger">{{ $errors->first('service_text') }}</p>
      @enderror
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
      <input type="file" class="form-control-file @error('service_image') is-invalid @enderror" id="service_image" name="service_image" value="{{ $service->service_image }}">
      @error('service_image')
      <p class="alert alert-danger">{{ $errors->first('service_image') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="service_cover"><b>Service Cover</b> </label>
      <input type="file" class="form-control-file @error('service_cover') is-invalid @enderror" id="service_cover" name="service_cover" value="{{ $service->service_cover }}">
      @error('service_cover')
      <p class="alert alert-danger">{{ $errors->first('service_cover') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
