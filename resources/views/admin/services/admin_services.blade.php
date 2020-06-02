@extends('layouts.admin')

@section('content')

  @foreach($services as $service)
  <div class="form-inline">
      <label for="service_title">{{ $service->service_title }}</label>
      <img class="image-small ml-1" src="{{ asset('img/'.$service->service_image) }}" alt="{{ $service->service_image }}">
      <div class="image-modal">
        <span class="close">&times;</span>
        <img class="modal-content image-large">
        <div class="modal-caption"></div>
      </div>
      <img class="image-small ml-1" src="{{ asset('img/'.$service->service_cover) }}" alt="{{ $service->service_cover }}">
      <div class="image-modal">
        <span class="close">&times;</span>
        <img class="modal-content image-large">
        <div class="modal-caption"></div>
      </div>
      <a class="btn btn-success ml-4" href="/admin/services/{{ $service->id }}/edit" role="button">Edit</a>
      <form method="POST" action="/admin/services/{{ $service->id }}">
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-danger ml-2">Delete</a>
      </form>
  </div>
  <br>
  @endforeach
  <a class="btn btn-primary" href="/admin/services/create" role="button">Create New Service</a>

@endsection
