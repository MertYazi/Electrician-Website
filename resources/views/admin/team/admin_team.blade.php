@extends('layouts.admin')

@section('content')

  @foreach($teams as $team)
  <div class="form-inline">
      <label for="name"> {{ $team->name }} {{ $team->surname }}</label>
      <a class="btn btn-success ml-4" href="/admin/team/{{ $team->id }}/edit" role="button">Edit</a>
      <form method="POST" action="/admin/team/{{ $team->id }}">
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-danger ml-2">Delete</a>
      </form>
  </div>
  <br>
  @endforeach
  <a class="btn btn-primary" href="/admin/team/create" role="button">Create New Member</a>

@endsection
