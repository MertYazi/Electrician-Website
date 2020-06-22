@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="row">
        <label class="text-orange" for="help_caption"><b>Help Caption</b></label>
      </th>
      <td colspan="5">
        <label for="help_caption">{{ $help->help_caption }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="help_keywords"><b>Help Keywords</b></label>
      </th>
      <td colspan="5">
        <label for="help_keywords">{{ $help->help_keywords }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="decide_text"><b>Decide Text</b></label>
      </th>
      <td colspan="5">
        <label for="decide_text">{{ $help->decide_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="decide_image"><b>Decide Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$help->decide_image) }}" alt="{{ $help->decide_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="decide_image">{{ $help->decide_image }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="reach_text"><b>Reach Text</b></label>
      </th>
      <td colspan="5">
        <label for="reach_text">{{ $help->reach_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="reach_image"><b>Reach Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$help->reach_image) }}" alt="{{ $help->reach_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="reach_image">{{ $help->reach_image }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="consult_text"><b>Consult Text</b></label>
      </th>
      <td colspan="5">
        <label for="consult_text">{{ $help->consult_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="consult_image"><b>Consult Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$help->consult_image) }}" alt="{{ $help->consult_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="consult_image">{{ $help->consult_image }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="get_service_text"><b>Get Service Text</b></label>
      </th>
      <td colspan="5">
        <label for="get_service_text">{{ $help->get_service_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="get_service_image"><b>Get Service Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$help->get_service_image) }}" alt="{{ $help->get_service_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="get_service_image">{{ $help->get_service_image }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td class="text-center" colspan="4"><a class="btn btn-primary" href="/admin/help/1/edit" role="button">Edit</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
