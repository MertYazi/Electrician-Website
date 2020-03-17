@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">

	<div class="carousel slide carousel-home" id="carouselHome" data-ride="carousel">

	  <div class="carousel-inner">

	    <div class="carousel-item active">
	      <img class="d-block w-100" src="img/home-1.jpg">
    	  <div class="carousel-caption">
    	  	<div class="carousel-text">
	          <h3>FUUU 1</h3>
	          <p class="lead">
	          	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	          </p>
          </div>
        </div>
	    </div>

	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/home-2.jpeg" >
    	  <div class="carousel-caption">
    	  	<div class="carousel-text">
	          <h3>FUUU 2</h3>
	          <p class="lead">
	          	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	      	  </p>
      	  </div>
        </div>
	    </div>

	  </div>

	  <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>

	  <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>

	</div>

</div>

<div class="container-fluid pl-5 pr-3 generation-padding bg-dark text-white-50">

		<div class="row pt-3">

			<div class="col-md-6 pl-4 pr-5">
				<img class="d-block w-100 rounded" src="img/generation.jpg">
			</div>

			<div class="col-md-6 mt-5 mt-md-0">

				<div class="d-inline-block">
				<h1 class="d-inline display-3">1988 |</h1>
				</div>

				<div class="d-inline-block">
					<h5 class="mt-3 mt-lg-0">32 Years</h5>
					<h4>Success Stories</h4>
				</div>

				<div class="mt-1">
					<p class="lead pt-2">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore.
					</p>
					<p class="d-none d-lg-block pt-1">
						Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation.
					</p>
					<p class="d-none d-lg-block">
						Consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip.
					</p>
					<p class="d-none d-lg-block">
						Consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip.
					</p>
				</div>

			</div>

		</div>

		<div class="row mt-3">

				<p class="d-lg-none">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</p>

				<p class="d-lg-none">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</p>

				<p class="d-lg-none">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</p>

		</div>

</div>

	<div class="container-fluid py-5">

		<h3 class="display-4 text-center">Our Services</h3>

	    <p class="lead text-center pt-3">
	    	Have a look at our services which comes from years of experience.
	    	<a href="" target="_blank">Services</a>
	    </p>

	    <div id="multi-item-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">

	      <div class="carousel-inner" role="listbox">

	        <div class="carousel-item active">
	          <div class="row">

	            <div class="col-md-4">
	              <div class="card mb-2">
	              	<img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4 clearfix d-none d-md-block">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4 clearfix d-none d-md-block">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	          </div>
	        </div>

	      <div class="carousel-item">

	          <div class="row">

	            <div class="col-md-4">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4 clearfix d-none d-md-block">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4 clearfix d-none d-md-block">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	          </div>

	        </div>

	        <div class="carousel-item">

	          <div class="row">

	            <div class="col-md-4">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Servis Detayı<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4 clearfix d-none d-md-block">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4 clearfix d-none d-md-block">
	              <div class="card mb-2">
	                <img class="card-img-top" src="img/service.jpg">
	                <div class="card-body">
	                  <h4 class="card-title">Card title</h4>
	                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	                  <a class="btn btn-outline-info" href="individual-services">Service Detail<i class="fas fa-angle-double-right fa-sm ml-2"></i></a>
	                </div>
	              </div>
	            </div>

	          </div>

	        </div>

	      </div>

	      <div class="controls-bot text-center pt-5">
	         <a class="btn-floating" href="#multi-item-carousel" data-slide="prev"><i class="fas fa-chevron-left fa-3x pr-1"></i></a>
	         <a class="btn-floating" href="#multi-item-carousel" data-slide="next"><i class="fas fa-chevron-right fa-3x pl-1"></i></a>
	       </div>

	    </div>

	</div>

<div class="container-fluid bg-dark text-white-50 py-5">

	<div class="text-center">
		<h3 class="display-4">Meet Our Team</h3>
		<p class="lead pt-2">
			Experienced electricians comes through family.
		</p>
	</div>

	<div class="row justify-content-center py-3 px-5">

	    <div class="col-lg-6 p-3">
	      <div class="container profile-container px-0 py-0">
	      <img src="img/expert-1.jpg" class="image profile-image rounded">
	        <div class="overlay profile-overlay text-center">
	        	<div class="social-padding-large">
		        	<i class="fab fa-facebook-square fa-3x"></i>
							<i class="fab fa-instagram fa-3x ml-3"></i>
	        	</div>
          	<div class="text social-padding-small">
          		<h4 class="social-padding-large">Name Surname</h4>
          		<h6 class="social-padding-small">Electrician</h6>
          	</div>
	        </div>
	      </div>
	    </div>

	    <div class="col-lg-6 p-3">
	      <div class="container profile-container px-0 py-0">
	        <img src="img/expert-2.jpg" class="image profile-image rounded">
	        <div class="overlay profile-overlay text-center">
	        	<div class="social-padding-small">
		        	<i class="fab fa-facebook-square fa-3x"></i>
		        	<i class="fab fa-instagram fa-3x ml-3"></i>
	        	</div>
          	<div class="text social-padding-large">
          		<h4 class="social-padding-large">Name Surname</h4>
          		<h6 class="social-padding-small">Electrician</h6>
          	</div>
	        </div>
	      </div>
	    </div>

	</div>

</div>

<div class="container-fluid my-5">

	<div class="row pt-2">
		<div class="container-fluid text-center">
			<h4 class="display-4">Get Help</h3>
			<p class="lead pt-2">
				Solution is only 4 steps ahead.
			</p>
			<p>
				Easy, fast, reliable
			</p>
		</div>
	</div>

	<div class="row pt-5 pb-4">

	  <div class="col-md-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="img/decide.jpg">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center">Decide</h4>
	        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="img/reach.jpg">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center">Reach Us</h4>
	        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="img/consult.jpg">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center">Consult</h4>
	        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-3 px-2">
	    <div class="card mb-2 border-0">
	      <img class="card-img-top rounded-circle help-image mx-auto" src="img/get-service.jpg">
	      <div class="card-body help-text mx-auto">
	        <h4 class="card-title text-center text-center">Get Service</h4>
	        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>
	  </div>

	</div>

</div>

@endsection
