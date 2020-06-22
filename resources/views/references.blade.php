@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img class="d-block w-100 cover-image" src="{{ asset('img/' . $site->references_cover) }}">
    </div>
  </div>
</div>


<div class="container-fluid px-5 py-4">

  <div class="text-center">

    <h3 class="display-4 text-center text-orange">References</h3>
    <p class="lead text-center">{{ $site->references_caption }}</p>

  </div>

  <div class="row justify-content-center px-1 py-2">
    @foreach($references as $reference)
    <div class="col-sm-6 col-md-3 col-lg-2 py-3">
      <div class="container profile-container px-0 py-0">
        <a href="{{ $reference->reference_link }}"><img src="{{ asset('img/' . $reference->reference_image) }}" class="image reference-image rounded-reference">
        <div class="overlay profile-overlay text-center">
            <h4 class="references-padding text-orange">{{ $reference->reference_title }}</h4>
        </div></a>
      </div>
     </div>
     @endforeach


  </div>

</div>

@endsection
