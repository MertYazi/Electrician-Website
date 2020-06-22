@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="row">
        <label class="text-orange" for="history_text"><b>History Text</b></label>
      </th>
      <td colspan="5">
        <label for="history_text">{{ $about->history_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="history_image"><b>History Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$about->history_image) }}" alt="{{ $about->history_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="history_image">{{ $about->history_image }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="mission_text"><b>Mission Text</b></label>
      </th>
      <td colspan="5">
        <label for="mission_text">{{ $about->mission_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="mission_image"><b>Mission Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$about->mission_image) }}" alt="{{ $about->mission_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="mission_image">{{ $about->mission_image }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="vision_text"><b>Vision Text</b></label>
      </th>
      <td colspan="5">
        <label for="vision_text">{{ $about->vision_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="vision_image"><b>Vision Image</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$about->vision_image) }}" alt="{{ $about->vision_image }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="vision_image">{{ $about->vision_image }}</label>
      </td>
    </tr>
    <tr>
      <th colspan="2" scope="row"></th>
      <td class="text-center" colspan="4"><a class="btn btn-primary" href="/admin/about/1/edit" role="button">Edit</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
