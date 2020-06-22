@include('layouts.header')

	<div class="container-fluid px-0 py-0">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-fade py-3">

			<a class="navbar-brand text-orange" href="/">{{ $site->site_name }}</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		  </button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto navbar-margin-right">
		      <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}"><a class="nav-link" href="/">HOMEPAGE</a></li>
		      <li class="nav-item {{ Request::path() === 'services' ? 'active' : '' }}"><a class="nav-link" href="/services">SERVICES</a></li>
		      <li class="nav-item {{ Request::path() === 'references' ? 'active' : '' }}"><a class="nav-link" href="/references">REFERENCES</a></li>
		      <li class="nav-item {{ Request::path() === 'about' ? 'active' : '' }}"><a class="nav-link" href="/about">ABOUT</a></li>
		      <li class="nav-item {{ Request::path() === 'contact' ? 'active' : '' }}"><a class="nav-link" href="/contact">CONTACT</a></li>
		    </ul>
		  </div>

		</nav>
	</div>

@yield('content')

@include('layouts.footer')
