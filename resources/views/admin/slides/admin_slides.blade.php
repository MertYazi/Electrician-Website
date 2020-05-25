@extends('layouts.admin')

@section('content')

  @foreach($slides as $slide)
  <div class="form-inline">
  <label for="slide_caption">{{ $slide->slide_caption }}</label>
  <a class="btn btn-success ml-4" href="/admin/slides/{{ $slide->id }}/edit" role="button">Edit</a>
  <form method="POST" action="/admin/slides/{{ $slide->id }}">
    @csrf
    @method('DELETE')
  <button type="submit" class="btn btn-danger ml-2">Delete</a>
  </form>
  </div>
  <br>
  @endforeach
  <a class="btn btn-primary" href="/admin/slides/create" role="button">Create New Slide</a>

@endsection
