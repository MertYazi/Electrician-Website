@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="row">
        <label class="text-orange" for="generation_caption"><b>Generation Caption</b></label>
      </th>
      <td colspan="5">
        <label for="generation_caption">{{ $generation->generation_caption }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="generation_text"><b>Generation Text</b></label>
      </th>
      <td colspan="5">
        <label for="generation_text">{{ $generation->generation_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="generation_image"><b>Generation Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$generation->generation_image) }}" alt="{{ $generation->generation_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="generation_image">{{ $generation->generation_image }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="generation_origin"><b>Generation Origin</b></label>
      </th>
      <td colspan="5">
        <label for="generation_origin">{{ $generation->generation_origin }}</label>
      </td>
    </tr>
    <tr>
      <th colspan="2" scope="row"></th>
      <td class="text-center" colspan="4"><a class="btn btn-primary" href="/admin/generations/1/edit" role="button">Edit</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
