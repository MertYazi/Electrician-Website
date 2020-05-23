@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/references/{{ $reference->id }}">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="title"><b>Reference Title</b></label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $reference->title }}">
    </div>
    <div class="form-group col-md-12">
      <label for="link"><b>Reference Link</b></label>
      <input type="url" class="form-control" id="link" name="link" value="{{ $reference->link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Reference Image</b></label>
      <input type="file" class="form-control-file" id="image" name="image" value="{{ $reference->image }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
