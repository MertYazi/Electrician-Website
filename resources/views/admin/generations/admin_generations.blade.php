@extends('layouts.admin')

@section('content')

<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="generation_caption"><b>Generation Caption:</b> {{ $generation->generation_caption }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="generation_text"><b>Generation Text:</b> {{ $generation->generation_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="generation_image"><b>Generation Image:</b> {{ $generation->generation_image }}</label>
      <img class="image-small ml-1" src="{{ asset('img/'.$generation->generation_image) }}" alt="{{ $generation->generation_image }}">
      <div class="image-modal">
        <span class="close">&times;</span>
        <img class="modal-content image-large">
        <div class="modal-caption"></div>
      </div>
    </div>
    <div class="form-group col-md-12">
      <label for="generation_origin"><b>Generation Origin:</b> {{ $generation->generation_origin }}</label>
    </div>
  </div>
  <a class="btn btn-primary" href="/admin/generations/1/edit" role="button">Edit</a>
</form>

@endsection
