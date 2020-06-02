@extends('layouts.admin')

@section('content')

<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="history_text"><b>History Text:</b> {{ $about->history_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="history_image"><b>History Image:</b> {{ $about->history_image }}</label>
      <img class="image-small ml-1" src="{{ asset('img/'.$about->history_image) }}" alt="{{ $about->history_image }}">
      <div class="image-modal">
        <span class="close">&times;</span>
        <img class="modal-content image-large">
        <div class="modal-caption"></div>
      </div>
    </div>
    <div class="form-group col-md-12">
      <label for="mission_text"><b>Mission Text:</b> {{ $about->mission_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="mission_image"><b>Mission Image:</b> {{ $about->mission_image }}</label>
      <img class="image-small ml-1" src="{{ asset('img/'.$about->mission_image) }}" alt="{{ $about->mission_image }}">
      <div class="image-modal">
        <span class="close">&times;</span>
        <img class="modal-content image-large">
        <div class="modal-caption"></div>
      </div>
    </div>
    <div class="form-group col-md-12">
      <label for="vision_text"><b>Vision Text:</b> {{ $about->vision_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="vision_image"><b>Vision Image:</b> {{ $about->vision_image }}</label>
      <img class="image-small ml-1" src="{{ asset('img/'.$about->vision_image) }}" alt="{{ $about->vision_image }}">
      <div class="image-modal">
        <span class="close">&times;</span>
        <img class="modal-content image-large">
        <div class="modal-caption"></div>
      </div>
    </div>
  </div>
  <a class="btn btn-primary" href="/admin/about/1/edit" role="button">Edit</a>
</form>

@endsection
