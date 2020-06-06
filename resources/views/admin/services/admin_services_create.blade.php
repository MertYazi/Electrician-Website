@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/services" enctype="multipart/form-data">
  @csrf

  <div class="form-row">
    @error('service_exist')
    <p class="alert alert-danger">{{ $errors->first('service_exist') }}</p>
    @enderror
    <div class="form-group col-md-12">
      <label for="service_title"><b>Service Title</b> </label>
      <input type="text" class="form-control @error('service_title') is-invalid @enderror" id="service_title" name="service_title" value="{{ old('service_title') }}">
      @error('service_title')
      <p class="alert alert-danger">{{ $errors->first('service_title') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="service_description"><b>Service Description</b> </label>
      <input type="text" class="form-control @error('service_description') is-invalid @enderror" id="service_description" name="service_description" value="{{ old('service_description') }}">
      @error('service_description')
      <p class="alert alert-danger">{{ $errors->first('service_description') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="service_text"><b>Service Text</b> </label>
      <textarea class="form-control @error('service_text') is-invalid @enderror" id="service_text" name="service_text" rows="3">{{ old('service_text') }}</textarea>
      @error('service_text')
      <p class="alert alert-danger">{{ $errors->first('service_text') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="service_importance"><b>Service Importance</b> </label>
      <select class="custom-select" id="service_importance" name="service_importance">
        <option selected value="0">Low</option>
        <option value="1">High</option>
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="service_image"><b>Service Image</b> </label>
      <input type="file" class="form-control-file @error('service_image') is-invalid @enderror" id="service_image" name="service_image" value="{{ old('service_image') }}" required>
      @error('service_image')
      <p class="alert alert-danger">{{ $errors->first('service_image') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="service_cover"><b>Service Cover</b> </label>
      <input type="file" class="form-control-file @error('service_cover') is-invalid @enderror" id="service_cover" name="service_cover" value="{{ old('service_cover') }}" required>
      @error('service_cover')
      <p class="alert alert-danger">{{ $errors->first('service_cover') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
