@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/generations/1" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="generation_caption"><b>Generations Caption</b></label>
      <input type="text" class="form-control" id="generation_caption" name="generation_caption" value="{{ $generation->generation_caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="generation_text"><b>Generations Text</b></label>
      <textarea class="form-control" id="generation_text" name="generation_text" rows="3">{{ $generation->generation_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="generation_image"><b>Generations Image</b></label>
      <input type="file" class="form-control-file" id="generation_image" name="generation_image" value="{{ $generation->generation_image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="generation_origin"><b>Generations Origin</b></label>
      <input type="text" class="form-control" id="generation_origin" name="generation_origin" value="{{ $generation->generation_origin }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
