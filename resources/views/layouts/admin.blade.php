<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

	<title>Competent Electrician</title>

</head>

<body>

	<div class="container-fluid px-0 py-0">
		<nav class="navbar fixed-top navbar-expand-lg navbar-fade navbar-dark py-3">

			<a class="navbar-brand" href="/admin/site">COMPETENT ELECTRICIAN</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		  </button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto navbar-margin-right">
		      <li class="nav-item active"><a class="nav-link" href="/admin/site">SITE <span class="sr-only">(current)</span></a></li>
					<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          HOMEPAGE
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="/admin/slides">Slides</a>
		          <a class="dropdown-item" href="/admin/generations">Generations</a>
		          <a class="dropdown-item" href="/admin/team">Team</a>
							<a class="dropdown-item" href="/admin/help">Help</a>
		        </div>
		      </li>
		      <li class="nav-item"><a class="nav-link" href="/admin/services">SERVICES</a></li>
		      <li class="nav-item"><a class="nav-link" href="/admin/references">REFERENCES</a></li>
		      <li class="nav-item"><a class="nav-link" href="/admin/about">ABOUT</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/contact">CONTACT</a></li>
					<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
										 onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
									</form>
							</div>
					</li>
		    </ul>
		  </div>

		</nav>
	</div>

  <div class="container-fluid px-5 py-5">

  	<div class="container-fluid py-5">
  		<h3 class="display-4 text-center">Admin Panel</h3>
  	</div>

  	<div class="row pt-4">

  		<div class="d-none d-lg-block col-lg-3">

  			<h4 class="px-2 pb-2">Contents</h4>
  			<ul class="list-group list-group-flush pr-4">
  			  <a href="/admin/site"><li class="list-group-item">Site</li></a>
					<a href="/admin/slides"><li class="list-group-item">Slides</li></a>
	  			<a href="/admin/generations"><li class="list-group-item">Generations</li></a>
					<a href="/admin/team"><li class="list-group-item">Team</li></a>
	  			<a href="/admin/help"><li class="list-group-item">Help</li></a>
  			  <a href="/admin/services"><li class="list-group-item">Services</li></a>
  			  <a href="/admin/references"><li class="list-group-item">References</li></a>
  			  <a href="/admin/about"><li class="list-group-item">About</li></a>
          <a href="/admin/contact"><li class="list-group-item">Contact</li></a>
  			</ul>

  		</div>

  		<div class="col-lg-9">

  			<div class="justify-content-center">

  			@yield('content')

  			</div>

  		</div>

  	</div>

  </div>

<footer class="page-footer font-small unique-color-dark bg-dark text-white-50 pt-2">
  <div class="container text-center text-md-left mt-5">
    <div class="row mt-3">

      <div class="col-md-5 col-lg-6 col-xl-5 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">COMPETENT ELECTRICIAN</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p>
        	Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      	</p>

      	<div class="pt-1">
	      	<a class="fb-ic"><i class="fab fa-facebook-square white-text mr-4"> </i></a>
	      	<a class="tw-ic"><i class="fab fa-twitter white-text mr-4"> </i></a>
	      	<a class="gplus-ic"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
	      	<a class="li-ic"><i class="fab fa-linkedin-in white-text mr-4"> </i></a>
	      	<a class="ins-ic"><i class="fab fa-instagram white-text"> </i></a>
      	</div>

      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">LINKS</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p><a href="/admin">HOMEPAGE</a></p>
        <p><a href="/admin/services">SERVICES</a></p>
        <p><a href="/admin/references">REFERENCES</a></p>
        <p><a href="/admin/about">ABOUT</a></p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase font-weight-bold">CONTACT</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p><i class="fas fa-home mr-3"></i> Istanbul, 34421, Turkey</p>
        <p><i class="fas fa-envelope mr-3"></i><span class="mail-text-size"> competent_electrician@gmail.com</span></p>
        <p><i class="fas fa-phone mr-3"></i> + 90 555 555 55 55</p>
        <p><i class="fas fa-print mr-3"></i> + 90 666 666 66 66</p>
      </div>

    </div>
  </div>

  <div class="footer-copyright text-center py-3">© 2020 Copyright
    <a href="/">COMPETENT ELECTRICIAN</a>
  </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/91b4e4e316.js" crossorigin="anonymous"></script>

</body>

</html>
