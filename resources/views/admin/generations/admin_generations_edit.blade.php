@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/generations/1">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="caption"><b>Generations Caption</b></label>
      <input type="text" class="form-control" id="caption" name="caption" value="{{ $generation->caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="text"><b>Generations Text</b></label>
      <textarea class="form-control" id="text" name="text" rows="3">{{ $generation->text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Generations Image</b></label>
      <input type="file" class="form-control-file" id="image" name="image" value="{{ $generation->image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="origin"><b>Generations Origin</b></label>
      <input type="number" class="form-control" id="origin" name="origin" value="{{ $generation->origin }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
