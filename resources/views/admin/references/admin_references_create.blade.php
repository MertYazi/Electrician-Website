@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/references" enctype="multipart/form-data">
  @csrf

  <div class="form-row">
    @error('reference_exist')
    <p class="alert alert-danger">{{ $errors->first('reference_exist') }}</p>
    @enderror
    <div class="form-group col-md-12">
      <label class="text-orange" for="reference_title"><b>Reference Title</b></label>
      <input type="text" class="form-control @error('reference_title') is-invalid @enderror" id="reference_title" name="reference_title" value="{{ old('reference_title') }}">
      @error('reference_title')
      <p class="alert alert-danger">{{ $errors->first('reference_title') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="reference_link"><b>Reference Link</b></label>
      <input type="url" class="form-control @error('reference_link') is-invalid @enderror" id="reference_link" name="reference_link" value="{{ old('reference_link') }}">
      @error('reference_link')
      <p class="alert alert-danger">{{ $errors->first('reference_link') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="reference_image"><b>Reference Image</b></label>
      <input type="file" class="form-control-file @error('reference_image') is-invalid @enderror" id="reference_image" name="reference_image" value="{{ old('reference_image') }}" required>
      @error('reference_image')
      <p class="alert alert-danger">{{ $errors->first('reference_image') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
