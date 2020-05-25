@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/slides/{{ $slide->id }}">
  @csrf
  @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="slide_caption"><b>Slide Caption</b></label>
      <input type="text" class="form-control" id="slide_caption" name="slide_caption" value="{{ $slide->slide_caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="slide_text"><b>Slide Text</b></label>
      <textarea class="form-control" id="slide_text" name="slide_text" rows="3">{{ $slide->slide_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="slide_image"><b>Slide Image</b></label>
      <input type="file" class="form-control-file" id="slide_image" name="slide_image" value="{{ $slide->slide_image }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
