@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">

	<div class="carousel slide carousel-home" id="carouselHome" data-ride="carousel">

	  <div class="carousel-inner">
			@foreach($slides as $slide)
				@if($loop->first)
        	<div class="carousel-item active">
				@else
					<div class="carousel-item">
    		@endif
		      <img class="d-block w-100" src="{{ asset('img/' . $slide->slide_image) }}">
	    	  <div class="carousel-caption">
	    	  	<div class="carousel-text">
		          <h1 class="text-orange">{{ $slide->slide_caption }}</h1>
		          <p class="lead text-orange">
		          	{{ $slide->slide_text }}
		          </p>
	          </div>
	        </div>
		    </div>
			@endforeach
	  </div>

	  <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
	    <i class="fas fa-chevron-left fa-3x pl-1 text-orange"></i>
	  </a>

	  <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
			<i class="fas fa-chevron-right fa-3x pl-1 text-orange"></i>
	  </a>

	</div>

</div>

<div class="container-fluid pl-5 pr-3 generation-padding bg-dark text-white-50">

		<div class="row pt-3">

			<div class="col-md-6 pl-4 pr-5">
				<img class="d-block w-100 rounded-generation" src="{{ asset('img/' . $generation->generation_image) }}">
			</div>

			<div class="col-md-6 mt-5 mt-md-0">

				<div class="d-inline-block text-orange">
				<h1 class="d-inline display-3">{{ $generation->generation_origin }} |</h1>
				</div>

				<div class="d-inline-block text-orange">
					<h5 class="mt-3 mt-lg-0">{{ ((int)now()->year - (int)$generation->generation_origin) }} Years</h5>
					<h4>{{ $generation->generation_caption }}</h4>
				</div>

				<div class="mt-1">
					<p class="lead d-none d-lg-block pt-1">
						{{ $generation->generation_text }}
					</p>
				</div>

			</div>

		</div>

		<div class="row mt-3">
				<p class="d-lg-none">
					{{ $generation->generation_text }}
				</p>
		</div>

</div>

	<div class="container-fluid py-5">

		<h3 class="display-4 text-center text-orange">Services</h3>

	    <p class="lead text-center py-3">
	    	{{ $site->services_caption }}
	    	<a class="pl-3 text-orange" href="/services">All Services</a>
	    </p>

			<div id="multi-item-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">

				<div class="carousel-inner" role="listbox">
					@for($i = 0; $i < count($services_in_three); $i++)
					@if($i == 0)
					<div class="carousel-item active">
					@else
					<div class="carousel-item">
					@endif
						<div class="row">
					@if(isset($services_in_three[$i][0]))
							<div class="col-md-4">
								<div class="card mb-2">
									<img class="card-img-top" src="{{ asset('img/' . $services_in_three[$i][0]->service_image) }}">
									<div class="card-body">
										<h4 class="card-title text-orange">{{ $services_in_three[$i][0]->service_title }}</h4>
										<p class="card-text">{{ $services_in_three[$i][0]->service_description }}</p>
										@if($services_in_three[$i][0]->service_importance == 1)
											<a class="btn btn-outline-dark text-orange" href="services/{{ $services_in_three[$i][0]->service_slug }}">Service Details
												<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
										@else
											<a class="btn btn-outline-dark text-orange text-white-50">No Details</a>
										@endif
									</div>
								</div>
							</div>
					@endif

					@if(isset($services_in_three[$i][1]))
							<div class="col-md-4">
								<div class="card mb-2">
									<img class="card-img-top" src="{{ asset('img/' . $services_in_three[$i][1]->service_image) }}">
									<div class="card-body">
										<h4 class="card-title text-orange">{{ $services_in_three[$i][1]->service_title }}</h4>
										<p class="card-text">{{ $services_in_three[$i][1]->service_description }}</p>
										@if($services_in_three[$i][1]->service_importance == 1)
											<a class="btn btn-outline-dark text-orange text-white-50" href="services/{{ $services_in_three[$i][1]->service_slug }}">Service Details
												<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
										@else
											<a class="btn btn-outline-dark text-orange text-white-50">No Details</a>
										@endif
									</div>
								</div>
							</div>
					@endif

					@if(isset($services_in_three[$i][2]))
							<div class="col-md-4">
								<div class="card mb-2">
									<img class="card-img-top" src="{{ asset('img/' . $services_in_three[$i][2]->service_image) }}">
									<div class="card-body">
										<h4 class="card-title text-orange">{{ $services_in_three[$i][2]->service_title }}</h4>
										<p class="card-text">{{ $services_in_three[$i][2]->service_description }}</p>
										@if($services_in_three[$i][2]->service_importance == 1)
											<a class="btn btn-outline-dark text-orange text-white-50" href="services/{{ $services_in_three[$i][2]->service_slug }}">Service Details
												<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
										@else
											<a class="btn btn-outline-dark text-orange text-white-50">No Details</a>
										@endif
									</div>
								</div>
							</div>
					@endif
						</div>
					</div>
					@endfor

				</div>

				<div class="controls-bot text-center pt-5">
					 <a class="btn-floating" href="#multi-item-carousel" data-slide="prev"><i class="fas fa-chevron-left fa-3x pr-1 text-orange"></i></a>
					 <a class="btn-floating" href="#multi-item-carousel" data-slide="next"><i class="fas fa-chevron-right fa-3x pl-1 text-orange"></i></a>
				 </div>

			</div>

	</div>

<div class="container-fluid bg-dark text-white-50 py-5">

	<div class="text-center">
		<h3 class="display-4 text-orange">Team</h3>
		<p class="lead pt-2">
			{{ $site->team_caption }}
		</p>
	</div>

	<div class="row justify-content-center py-3 px-5">
			@foreach($team_members as $team_member)
	    <div class="col-sm-6 col-md-4 col-lg-3 p-3">
	      <div class="container profile-container px-0 py-0">
	      <img src="{{ asset('img/' . $team_member->member_image) }}" class="image profile-image rounded-team">
	        <div class="overlay profile-overlay text-center text-orange">
	        	<div class="social-padding-large">
		        	<a href="{{ $team_member->member_facebook }}"><i class="fab fa-facebook-square fa-3x text-orange"></i></a>
							<a href="{{ $team_member->member_instagram }}"><i class="fab fa-instagram fa-3x ml-3 text-orange"></i></a>
							<a href="{{ $team_member->member_twitter }}"><i class="fab fa-twitter fa-3x ml-3 text-orange"></i></a>
	        	</div>
          	<div class="text social-padding-small">
          		<h4 class="social-padding-large">{{ $team_member->member_name }} {{ $team_member->member_surname }}</h4>
          		<h6 class="social-padding-small">{{ $team_member->member_mission }}</h6>
          	</div>
	        </div>
	      </div>
	    </div>
			@endforeach
	</div>

</div>

<div class="container-fluid my-5">

	<div class="row pt-2">
		<div class="container-fluid text-center">
			<h4 class="display-4 text-orange">Help</h3>
			<p class="lead pt-2">
				{{ $help->help_caption }}
			</p>
			<p>
				{{ $help->help_keywords }}
			</p>
		</div>
	</div>

	<div class="row pt-5 pb-4">

	  <div class="col-sm-6 col-md-6 col-lg-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="{{ asset('img/' . $help->decide_image) }}">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center text-orange">Decide</h4>
	        <p class="card-text text-center">{{ $help->decide_text }}</p>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-6 col-lg-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="{{ asset('img/' . $help->reach_image) }}">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center text-orange">Reach Us</h4>
	        <p class="card-text text-center">{{ $help->reach_text }}</p>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-6 col-lg-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="{{ asset('img/' . $help->consult_image) }}">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center text-orange">Consult</h4>
	        <p class="card-text text-center">{{ $help->consult_text }}</p>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6 col-md-6 col-lg-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="{{ asset('img/' . $help->get_service_image) }}">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center text-orange">Get Service</h4>
	        <p class="card-text text-center">{{ $help->get_service_text }}</p>
	      </div>
	    </div>
	  </div>

	</div>

</div>

@endsection
