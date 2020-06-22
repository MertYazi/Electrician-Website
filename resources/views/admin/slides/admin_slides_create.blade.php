@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/slides" enctype="multipart/form-data">
  @csrf

  <div class="form-row">
    @error('slide_exist')
    <p class="alert alert-danger">{{ $errors->first('slide_exist') }}</p>
    @enderror
    <div class="form-group col-md-12">
      <label class="text-orange" for="slide_caption"><b>Slide Caption</b></label>
      <input type="text" class="form-control @error('slide_caption') is-invalid @enderror" id="slide_caption" name="slide_caption" value="{{ old('slide_caption') }}">
      @error('slide_caption')
      <p class="alert alert-danger">{{ $errors->first('slide_caption') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="slide_text"><b>Slide Text</b></label>
      <textarea class="form-control @error('slide_text') is-invalid @enderror" id="slide_text" name="slide_text" rows="3">{{ old('slide_text') }}</textarea>
      @error('slide_text')
      <p class="alert alert-danger">{{ $errors->first('slide_text') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="slide_image"><b>Slide Image</b></label>
      <input type="file" class="form-control-file @error('slide_image') is-invalid @enderror" id="slide_image" name="slide_image" value="{{ old('slide_image') }}" required>
      @error('slide_image')
      <p class="alert alert-danger">{{ $errors->first('slide_image') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
