@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 cover-image" src="{{ asset('img/' . $site->about_cover) }}">
    </div>
  </div>
</div>

<div class="container-fluid px-5 py-4">

  <div class="text-center">
    <h3 class="display-4 text-center text-orange">About Us</h3>
    <p class="lead text-center">{{ $site->about_caption }}</p>
  </div>

  <div class="row justify-content-center py-3">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <img src="{{ asset('img/' . $about->history_image) }}" class="image about-image rounded">
      <h3 class="display-5 text-center pt-3 text-orange">History</h3>
      <p class="pt-2 text-center">
        {{ $about->history_text }}
      </p>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <img src="{{ asset('img/' . $about->mission_image) }}" class="image about-image rounded">
      <h3 class="display-5 text-center pt-3 text-orange">Mission</h3>
      <p class="pt-2 text-center">
        {{ $about->mission_text }}
      </p>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <img src="{{ asset('img/' . $about->vision_image) }}" class="image about-image rounded">
      <h3 class="display-5 text-center pt-3 text-orange">Vision</h3>
      <p class="pt-2 text-center">
        {{ $about->vision_text }}
      </p>
    </div>

  </div>

</div>

@endsection
