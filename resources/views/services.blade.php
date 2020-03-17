@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img class="d-block w-100 cover-image" src="img/services.jpg">
    </div>
	</div>
</div>

<div class="container-fluid px-5 py-4">

	<div class="container-fluid">
		<h3 class="display-4 text-center">Our Services</h3>
		<p class="lead text-center">We guarantee that you will be satisfied with our services.</p>
	</div>

	<div class="row pt-4">

		<div class="col-md-4 col-lg-4">

			<h4 class="px-2 pb-2">Detailed Services</h4>
			<ul class="list-group list-group-flush pr-4">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
			</ul>

			<h4 class="pt-5 px-2 pb-2">Other Services</h4>
			<ul class="list-group list-group-flush pr-4">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
		    <li class="list-group-item">Dapibus ac facilisis in</li>
		    <li class="list-group-item">Morbi leo risus</li>
		    <li class="list-group-item">Porta ac consectetur ac</li>
			</ul>

		</div>

		<div class="col-md-8 col-lg-8">

			<div class="row">

				<div class="col-sm-6 col-lg-4 px-2 services-body">
					<div class="card mb-2 border-0">
					  <img class="card-img-top" src="img/service.jpg">
					  <div class="card-body">
					    <h4 class="card-title">Card title</h4>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a class="btn btn-outline-info" href="individual-services">Service Details
							<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
					  </div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 px-2 services-body">
					<div class="card mb-2 border-0">
					  <img class="card-img-top" src="img/service.jpg">
					  <div class="card-body">
					    <h4 class="card-title">Card title</h4>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a class="btn btn-outline-info" href="individual-services">Service Details
					    <i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
					  </div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 px-2 services-body">
					<div class="card mb-2 border-0">
					  <img class="card-img-top" src="img/service.jpg">
					  <div class="card-body">
					    <h4 class="card-title">Card title</h4>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a class="btn btn-outline-info" href="individual-services">Service Details
					    <i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
					  </div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 px-2 services-body">
					<div class="card mb-2 border-0">
					  <img class="card-img-top" src="img/service.jpg">
					  <div class="card-body">
					    <h4 class="card-title">Card title</h4>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a class="btn btn-outline-info" href="individual-services">Service Details
					    <i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
					  </div>
					</div>
				</div>

			</div>

		</div>

	</div>

</div>

@endsection
