@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 cover-image" src="{{ asset('img/' . $site->contact_cover) }}">
      </div>
    </div>
</div>

<div class="container-fluid px-5 py-4">

  <div class="text-center">
    <h3 class="display-4 text-center text-orange">Contact Us</h3>
    <p class="lead text-center">{{ $site->contact_caption }}</p>
  </div>

  <div class="row justify-content-center py-4">

    <div class="col-sm-12 col-md-5 col-lg-4 px-3 py-3">
      <h4 class="text-orange">Contact Form</h4><hr>
      <p class="pt-2 pl-2">
        {{ $contact->contact_text }}
      </p><br>

      <form method="POST" action="/contact" enctype="multipart/form-data">
        @csrf

        @if (Session::has('message_sent'))
        <p class="alert alert-success">{{ Session::get('message_sent') }}</p>
        @endif
        <div class="form-group">
          <input type="text" class="form-control border-0 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}">
          @error('name')
          <p class="alert alert-danger">{{ $errors->first('name') }}</p>
          @enderror
        </div><br>
        <div class="form-group">
          <input type="email" class="form-control border-0 @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
          @error('email')
          <p class="alert alert-danger">{{ $errors->first('email') }}</p>
          @enderror
        </div><br>
        <div class="form-group">
          <input type="text" class="form-control border-0 @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Enter subject" value="{{ old('subject') }}">
          @error('subject')
          <p class="alert alert-danger">{{ $errors->first('subject') }}</p>
          @enderror
        </div><br>
        <div class="form-group">
          <textarea class="form-control border-0 @error('message') is-invalid @enderror" id="message" name="message" rows="3" placeholder="Enter your message">{{ old('message') }}</textarea>
          @error('message')
          <p class="alert alert-danger">{{ $errors->first('message') }}</p>
          @enderror
        </div><br>
        <button type="submit" class="btn btn-outline-dark btn-lg btn-block text-orange">Submit</button>
      </form>

    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-sm-12 col-md-5 col-lg-4 shadow-lg rounded px-3 py-3">
      <h4 class="text-orange">Contact Info</h4><hr>
      <p class="pt-2"><i class="fas fa-home mr-3 text-orange"></i>{{ $contact->contact_address_long }}</p><br>
      <p><i class="fas fa-envelope mr-3 text-orange"></i><span>{{ $contact->contact_email }}</span></p><br>
      <p><i class="fas fa-phone mr-3 text-orange"></i>{{ $contact->contact_phone }}</p><br>
      <p><i class="fas fa-print mr-3 text-orange"></i>{{ $contact->contact_fax }}</p><br class="pb-3">

      <div class="pt-5 text-center">
        <a class="fb-ic" href="{{ $contact->contact_facebook_link }}"><i class="fab fa-facebook-square white-text mr-3 social-icon-size text-orange"></i></a>
        <a class="tw-ic" href="{{ $contact->contact_twitter_link }}"><i class="fab fa-twitter white-text mr-3 social-icon-size text-orange"></i></a>
        <a class="gplus-ic" href="{{ $contact->contact_googleplus_link }}"><i class="fab fa-google-plus-g white-text mr-3 social-icon-size text-orange"></i></a>
        <a class="li-ic" href="{{ $contact->contact_linkedin_link }}"><i class="fab fa-linkedin-in white-text mr-3 social-icon-size text-orange"></i></a>
        <a class="ins-ic" href="{{ $contact->contact_instagram_link }}"><i class="fab fa-instagram white-text social-icon-size text-orange"></i></a>
      </div>

    </div>

  </div>

</div>

@endsection
