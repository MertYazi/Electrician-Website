@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/about/1">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="history_text"><b>History Text</b></label>
      <textarea class="form-control" id="history_text" name="history_text" rows="3">{{ $about->history_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="history_image"><b>History Image</b></label>
      <input type="file" class="form-control-file" id="history_image" name="history_image" value="{{ $about->history_image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="mission_text"><b>Mission Text</b></label>
      <textarea class="form-control" id="mission_text" name="mission_text" rows="3">{{ $about->mission_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="mission_image"><b>Mission Image</b></label>
      <input type="file" class="form-control-file" id="mission_image" name="mission_image" value="{{ $about->mission_image }}">
    </div>
    <div class="form-group col-md-12">
      <label for="vision_text"><b>Vision Text</b></label>
      <textarea class="form-control" id="vision_text" name="vision_text" rows="3">{{ $about->vision_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="vision_image"><b>Vision Image</b></label>
      <input type="file" class="form-control-file" id="vision_image" name="vision_image" value="{{ $about->vision_image }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
