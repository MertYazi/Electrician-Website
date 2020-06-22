<footer class="page-footer font-small unique-color-dark bg-dark text-white-50 pt-2">
  <div class="container text-center text-md-left mt-5">
    <div class="row mt-3">

      <div class="col-md-5 col-lg-6 col-xl-5 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">{{ $site->site_name }}</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p>
        	{{ $site->site_description }}
      	</p>

      	<div class="pt-1">
	      	<a class="fb-ic" href="{{ $contact->contact_facebook_link }}"><i class="fab fa-facebook-square white-text mr-4"></i></a>
	      	<a class="tw-ic" href="{{ $contact->contact_twitter_link }}"><i class="fab fa-twitter white-text mr-4"></i></a>
	      	<a class="gplus-ic" href="{{ $contact->contact_googleplus_link }}"><i class="fab fa-google-plus-g white-text mr-4"></i></a>
	      	<a class="li-ic" href="{{ $contact->contact_linkedin_link }}"><i class="fab fa-linkedin-in white-text mr-4"></i></a>
	      	<a class="ins-ic" href="{{ $contact->contact_instagram_link }}"><i class="fab fa-instagram white-text"></i></a>
      	</div>

      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">LINKS</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p><a href="/">HOMEPAGE</a></p>
        <p><a href="/services">SERVICES</a></p>
        <p><a href="/references">REFERENCES</a></p>
        <p><a href="/about">ABOUT</a></p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase font-weight-bold">CONTACT</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p><i class="fas fa-home mr-3"></i>{{ $contact->contact_address_short }}</p>
        <p><i class="fas fa-envelope mr-3"></i><span class="mail-text-size">{{ $contact->contact_email }}</span></p>
        <p><i class="fas fa-phone mr-3"></i>{{ $contact->contact_phone }}</p>
        <p><i class="fas fa-print mr-3"></i>{{ $contact->contact_fax }}</p>
      </div>

    </div>
  </div>

  <div class="footer-copyright text-center py-3">© {{ now()->year }} Copyright
    <a href="/">{{ $site->site_name }}</a>
  </div>

</footer>

<button onclick="topFunction()" class="scroll-button" id="scrollButton" title="Go to top"><i class="fas fa-chevron-up"></i></button>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/91b4e4e316.js" crossorigin="anonymous"></script>

<script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>
