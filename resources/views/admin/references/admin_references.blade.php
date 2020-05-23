@extends('layouts.admin')

@section('content')

  @foreach($references as $reference)
  <div class="form-inline">
      <label for="title">{{ $reference->title }}</label>
      <a class="btn btn-success ml-4" href="/admin/references/{{ $reference->id }}/edit" role="button">Edit</a>
      <form method="POST" action="/admin/references/{{ $reference->id }}">
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-danger ml-2">Delete</a>
      </form>
  </div>
  <br>
  @endforeach
  <a class="btn btn-primary" href="/admin/references/create" role="button">Create New Reference</a>

@endsection
