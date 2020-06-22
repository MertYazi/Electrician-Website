@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100 cover-image" src="{{ asset('img/' . $service->service_cover) }}">
		</div>
	</div>
</div>

<div class="container-fluid px-5 py-5">
	<div class="row pt-3">
		<div class="col-md-4 col-lg-4">

			<h3 class="px-2 pb-2 text-orange">Detailed Services</h3>
			<ul class="list-group list-group-flush pr-4">
        @foreach($all_services as $single_service)
          @if($single_service->service_importance == 1)
  			     <li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'services/' . $single_service->service_slug ? 'bg-orange text-white-50' : '' }}">
							 <a class="nav-link text-dark" href="/services/{{ $single_service->service_slug }}">{{ $single_service->service_title }}</a></li>
          @endif
        @endforeach
			</ul>

			<h3 class="pt-5 px-2 pb-2 text-orange">Other Services</h3>
			<ul class="list-group list-group-flush pr-4 pb-5">
        @foreach($all_services as $single_service)
          @if($single_service->service_importance == 0)
			       <li class="list-group-item border-0 pl-4">{{ $single_service->service_title }}</li>
          @endif
			  @endforeach
			</ul>

		</div>

		<div class="col-md-8 col-lg-8 pb-5">

			<div class="container-fluid px-0">
				<h3 class="display-5 text-orange">{{ $service->service_title }}</h3>
				<p class="lead">{{ $service->service_description }}</p>
				<div class="row justify-content-center">
					<div class="col-md-10 pt-3">
						<img class="d-block w-100 service-image rounded-service" src="{{ asset('img/' . $service->service_image) }}">
					</div>
				</div>
				<div class="row">
					<p class="lead pt-5">
						{{ $service->service_text }}
					</p>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection
