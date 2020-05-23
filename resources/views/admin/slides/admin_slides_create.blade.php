@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/slides">
  @csrf

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="caption"><b>Slide Caption</b></label>
      <input type="text" class="form-control" id="caption" name="caption">
    </div>
    <div class="form-group col-md-12">
      <label for="text"><b>Slide Text</b></label>
      <textarea class="form-control" id="text" name="text" rows="3"></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Slide Image</b></label>
      <input type="file" class="form-control-file" id="image" name="image">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
