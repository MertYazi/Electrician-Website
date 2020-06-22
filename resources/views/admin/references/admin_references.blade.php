@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    @foreach($references as $reference)
    <tr>
      <th scope="row">
        <label class="text-orange" for="reference_title">{{ $reference->reference_title }}</label>
      </th>
      <td class="text-center">
        <img class="image-small ml-1" src="{{ asset('img/'.$reference->reference_image) }}" alt="{{ $reference->reference_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
      </td>
      <td class="text-center">
        <a class="btn btn-success ml-4" href="/admin/references/{{ $reference->id }}/edit" role="button">Edit</a>
      </td>
      <td class="text-center">
        <form method="POST" action="/admin/references/{{ $reference->id }}">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Are you sure to delete this reference?')">Delete</a>
        </form>
      </td>
    </tr>
    @endforeach
    <tr><th scope="row"></th></tr>
    <tr>
      <th scope="row"></th>
      <td class="text-center" colspan="2"><a class="btn btn-primary" href="/admin/references/create" role="button">Create New Reference</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
