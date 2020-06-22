@include('layouts.header')

	<div class="container-fluid px-0 py-0">
		<nav class="navbar fixed-top navbar-expand-lg navbar-fade navbar-dark py-3">

			<a class="navbar-brand text-orange" href="/admin/site">{{ $site->site_name }}</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		  </button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto navbar-margin-right">
		      <li class="nav-item {{ Request::path() === 'admin/site' ? 'active' : '' }}"><a class="nav-link" href="/admin/site">SITE</a></li>
					<li class="nav-item dropdown {{ Request::path() === 'admin/slides' || Request::path() === 'admin/generations' || Request::path() === 'admin/team'
					|| Request::path() === 'admin/help' ? 'active' : '' }}">
		        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          HOMEPAGE
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="/admin/slides">SLIDES</a>
		          <a class="dropdown-item" href="/admin/generations">GENERATIONS</a>
		          <a class="dropdown-item" href="/admin/team">TEAM</a>
							<a class="dropdown-item" href="/admin/help">HELP</a>
		        </div>
		      </li>
		      <li class="nav-item {{ Request::path() === 'admin/services' ? 'active' : '' }}"><a class="nav-link" href="/admin/services">SERVICES</a></li>
		      <li class="nav-item {{ Request::path() === 'admin/references' ? 'active' : '' }}"><a class="nav-link" href="/admin/references">REFERENCES</a></li>
		      <li class="nav-item {{ Request::path() === 'admin/about' ? 'active' : '' }}"><a class="nav-link" href="/admin/about">ABOUT</a></li>
          <li class="nav-item {{ Request::path() === 'admin/contact' ? 'active' : '' }}"><a class="nav-link" href="/admin/contact">CONTACT</a></li>
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

  	<div class="container-fluid pt-5 pb-3">
  		<h3 class="display-4 text-center text-orange">Admin Panel</h3>
  	</div>

  	<div class="row pt-4">

  		<div class="d-none d-lg-block col-lg-3">

  			<h3 class="px-2 pb-2 text-orange">Contents</h3>
  			<ul class="list-group list-group-flush pr-4">
  			  <li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/site' ? 'active bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/site">Site</a></li>
					<li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/slides' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/slides">Slides</a></li>
	  			<li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/generations' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/generations">Generations</a></li>
					<li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/team' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/team">Team</a></li>
	  			<li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/help' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/help">Help</a></li>
  			  <li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/services' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/services">Services</a></li>
  			  <li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/references' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/references">References</a></li>
  			  <li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/about' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/about">About</a></li>
          <li class="list-group-item list-group-item-action border-0 rounded {{ Request::path() === 'admin/contact' ? 'bg-orange text-white-50' : '' }}">
						<a class="nav-link text-dark" href="/admin/contact">Contact</a></li>
  			</ul>

  		</div>

  		<div class="col-lg-9">

  			<div class="justify-content-center">

  			@yield('content')

  			</div>

  		</div>

  	</div>

  </div>

@include('layouts.footer')
