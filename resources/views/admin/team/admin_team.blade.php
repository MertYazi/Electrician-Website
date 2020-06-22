@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    @foreach($teams as $team)
    <tr>
      <th scope="row">
        <label class="text-orange" for="member_name">{{ $team->member_name }} {{ $team->member_surname }}</label>
      </th>
      <td class="text-center">
        <img class="image-small ml-1" src="{{ asset('img/'.$team->member_image) }}" alt="{{ $team->member_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
      </td>
      <td class="text-center">
        <a class="btn btn-success ml-4" href="/admin/team/{{ $team->id }}/edit" role="button">Edit</a>
      </td>
      <td class="text-center">
        <form method="POST" action="/admin/team/{{ $team->id }}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Are you sure to delete this member?')">Delete</a>
        </form>
      </td>
    </tr>
    @endforeach
    <tr><th scope="row"></th></tr>
    <tr>
      <th scope="row"></th>
      <td class="text-center" colspan="2"><a class="btn btn-primary" href="/admin/team/create" role="button">Create New Member</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
