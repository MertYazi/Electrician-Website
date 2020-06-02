@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/references" enctype="multipart/form-data">
  @csrf

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="reference_title"><b>Reference Title</b></label>
      <input type="text" class="form-control" id="reference_title" name="reference_title">
    </div>
    <div class="form-group col-md-12">
      <label for="reference_link"><b>Reference Link</b></label>
      <input type="url" class="form-control" id="reference_link" name="reference_link">
    </div>
    <div class="form-group col-md-12">
      <label for="reference_image"><b>Reference Image</b></label>
      <input type="file" class="form-control-file" id="reference_image" name="reference_image">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
