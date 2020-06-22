@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    @foreach($services as $service)
    <tr>
      <th scope="row">
        <label class="text-orange" for="service_title">{{ $service->service_title }}</label>
      </th>
      <td class="text-center">
        <img class="image-small ml-1" src="{{ asset('img/'.$service->service_image) }}" alt="{{ $service->service_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
      </td>
      <td class="text-center">
        <img class="image-small ml-1" src="{{ asset('img/'.$service->service_cover) }}" alt="{{ $service->service_cover }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
      </td>
      <td class="text-center">
        <a class="btn btn-success ml-4" href="/admin/services/{{ $service->service_slug }}/edit" role="button">Edit</a>
      </td>
      <td class="text-center">
        <form method="POST" action="/admin/services/{{ $service->service_slug }}">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Are you sure to delete this service?')">Delete</a>
        </form>
      </td>
    </tr>
    @endforeach
    <tr><th scope="row"></th></tr>
    <tr>
      <th scope="row"></th>
      <td class="text-center" colspan="3"><a class="btn btn-primary" href="/admin/services/create" role="button">Create New Service</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
