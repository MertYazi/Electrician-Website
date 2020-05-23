@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/slides/{{ $slide->id }}">
  @csrf
  @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="caption"><b>Slide Caption</b></label>
      <input type="text" class="form-control" id="caption" name="caption" value="{{ $slide->caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="text"><b>Slide Text</b></label>
      <textarea class="form-control" id="text" name="text" rows="3">{{ $slide->text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Slide Image</b></label>
      <input type="file" class="form-control-file" id="image" name="image" value="{{ $slide->image }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
