@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/about/1" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="history_text"><b>History Text</b></label>
      <textarea class="form-control @error('history_text') is-invalid @enderror" id="history_text" name="history_text" rows="3">{{ $about->history_text }}</textarea>
      @error('history_text')
      <p class="alert alert-danger">{{ $errors->first('history_text') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="history_image"><b>History Image</b></label>
      <input type="file" class="form-control-file @error('history_image') is-invalid @enderror" id="history_image" name="history_image" value="{{ $about->history_image }}">
      @error('history_image')
      <p class="alert alert-danger">{{ $errors->first('history_image') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="mission_text"><b>Mission Text</b></label>
      <textarea class="form-control @error('mission_text') is-invalid @enderror" id="mission_text" name="mission_text" rows="3">{{ $about->mission_text }}</textarea>
      @error('mission_text')
      <p class="alert alert-danger">{{ $errors->first('mission_text') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="mission_image"><b>Mission Image</b></label>
      <input type="file" class="form-control-file @error('mission_image') is-invalid @enderror" id="mission_image" name="mission_image" value="{{ $about->mission_image }}">
      @error('mission_image')
      <p class="alert alert-danger">{{ $errors->first('mission_image') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="vision_text"><b>Vision Text</b></label>
      <textarea class="form-control @error('vision_text') is-invalid @enderror" id="vision_text" name="vision_text" rows="3">{{ $about->vision_text }}</textarea>
      @error('vision_text')
      <p class="alert alert-danger">{{ $errors->first('vision_text') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="vision_image"><b>Vision Image</b></label>
      <input type="file" class="form-control-file @error('vision_image') is-invalid @enderror" id="vision_image" name="vision_image" value="{{ $about->vision_image }}">
      @error('vision_image')
      <p class="alert alert-danger">{{ $errors->first('vision_image') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
