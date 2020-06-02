@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/help/1" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="help_caption"><b>Help Caption</b></label>
      <input type="text" class="form-control" id="help_caption" name="help_caption" value="{{ $help->help_caption }}">
    </div>
    <div class="form-group col-md-12">
      <label for="help_keywords"><b>Help Keywords</b></label>
      <input type="text" class="form-control" id="help_keywords" name="help_keywords" value="{{ $help->help_keywords }}">
    </div>
    <div class="form-group col-md-12">
      <label for="decide_text"><b>Decide Text</b></label>
      <textarea class="form-control" id="decide_text" name="decide_text" rows="3">{{ $help->decide_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="decide_image"><b>Decide Image</b></label>
      <input type="file" class="form-control-file" id="decide_image" name="decide_image" value="{{ $help->decide_image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="reach_text"><b>Reach Text</b></label>
      <textarea class="form-control" id="reach_text" name="reach_text" rows="3">{{ $help->reach_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="reach_image"><b>Reach Image</b></label>
      <input type="file" class="form-control-file" id="reach_image" name="reach_image" value="{{ $help->reach_image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="consult_text"><b>Consult Text</b></label>
      <textarea class="form-control" id="consult_text" name="consult_text" rows="3">{{ $help->consult_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="consult_image"><b>Consult Image</b></label>
      <input type="file" class="form-control-file" id="consult_image" name="consult_image" value="{{ $help->consult_image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="get_service_text"><b>Get Service Text</b></label>
      <textarea class="form-control" id="get_service_text" name="get_service_text" rows="3">{{ $help->get_service_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="get_service_image"><b>Get Service Image</b></label>
      <input type="file" class="form-control-file" id="get_service_image" name="get_service_image" value="{{ $help->get_service_image }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
