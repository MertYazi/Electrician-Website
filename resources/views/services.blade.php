@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img class="d-block w-100 cover-image" src="{{ asset('img/' . $site->services_cover) }}">
    </div>
	</div>
</div>

<div class="container-fluid px-5 py-4">

	<div class="container-fluid">
		<h3 class="display-4 text-center text-orange">Services</h3>
		<p class="lead text-center">{{ $site->services_caption }}</p>
	</div>

	<div class="row pt-4">

		<div class="col-md-4 col-lg-4">

			<h3 class="px-2 pb-2 text-orange">Detailed Services</h3>
			<ul class="list-group list-group-flush pr-4">
        @foreach($services as $service)
          @if($service->service_importance == 1)
  			     <li class="list-group-item list-group-item-action border-0">
               <a class="nav-link text-dark" href="/services/{{ $service->service_slug }}">{{ $service->service_title }}</a></li>
          @endif
        @endforeach
			</ul>

			<h3 class="pt-5 px-2 pb-2 text-orange">Other Services</h3>
			<ul class="list-group list-group-flush pr-4 pb-3">
        @foreach($services as $service)
          @if($service->service_importance == 0)
			       <li class="list-group-item border-0">{{ $service->service_title }}</li>
          @endif
			  @endforeach
			</ul>

		</div>

		<div class="col-md-8 col-lg-8">
			<div class="row">
        @foreach($services as $service)
				<div class="col-sm-6 col-md-6 col-lg-4 px-2 services-body">
					<div class="card mb-2 border-0">
					  <img class="card-img-top" src="{{ asset('img/' . $service->service_image) }}">
					  <div class="card-body">
					    <h4 class="card-title text-orange">{{ $service->service_title }}</h4>
					    <p class="card-text">{{ $service->service_description }}</p>
              @if($service->service_importance == 1)
  					    <a class="btn btn-outline-dark text-orange" href="services/{{ $service->service_slug }}">Service Details
  							<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
              @else
                <a class="btn btn-outline-dark text-orange">No Details</a>
              @endif
					  </div>
					</div>
				</div>
        @endforeach
			</div>
		</div>

	</div>

</div>

@endsection
