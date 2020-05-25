@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/slides">
  @csrf

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="slide_caption"><b>Slide Caption</b></label>
      <input type="text" class="form-control" id="slide_caption" name="slide_caption">
    </div>
    <div class="form-group col-md-12">
      <label for="slide_text"><b>Slide Text</b></label>
      <textarea class="form-control" id="slide_text" name="slide_text" rows="3"></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="slide_image"><b>Slide Image</b></label>
      <input type="file" class="form-control-file" id="slide_image" name="slide_image">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
