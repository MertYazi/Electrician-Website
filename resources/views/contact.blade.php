@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 cover-image" src="img/contact.jpg">
      </div>
    </div>
</div>

<div class="container-fluid px-5 py-4">

  <div class="text-center">
    <h3 class="display-4 text-center">Contact Us</h3>
    <p class="lead text-center">There are many ways to contact us!</p>
  </div>

  <div class="row justify-content-center py-4">

    <div class="col-sm-12 col-md-5 col-lg-4 px-3 py-3">
      <h4>Contact Form</h4><hr>
      <p class="pt-2">
        You can easily describe your problem and contact with us with following form. Our experts return back to you as quick as possible!
      </p><hr>

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
        </div><hr>
        <div class="form-group">
          <input type="email" class="form-control border-0 @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">
          @error('email')
          <p class="alert alert-danger">{{ $errors->first('email') }}</p>
          @enderror
        </div><hr>
        <div class="form-group">
          <input type="text" class="form-control border-0 @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Enter subject" value="{{ old('subject') }}">
          @error('subject')
          <p class="alert alert-danger">{{ $errors->first('subject') }}</p>
          @enderror
        </div><hr>
        <div class="form-group">
          <textarea class="form-control border-0 @error('message') is-invalid @enderror" id="message" name="message" rows="3" placeholder="Enter your message">{{ old('message') }}</textarea>
          @error('message')
          <p class="alert alert-danger">{{ $errors->first('message') }}</p>
          @enderror
        </div><hr>
        <button type="submit" class="btn btn-outline-info btn-lg btn-block">Submit</button>
      </form>

    </div>

    <div class="col-md-1 col-lg-1"></div>

    <div class="col-sm-12 col-md-5 col-lg-4 shadow-lg rounded px-3 py-3">
      <h4>Contact Info</h4><hr>
      <p class="pt-2"><i class="fas fa-home mr-3"></i> Bereketzade, Galata Kulesi, 34421 Beyoglu/Istanbul</p><hr>
      <p><i class="fas fa-envelope mr-3"></i><span> competent_electrician@gmail.com</span></p><hr>
      <p><i class="fas fa-phone mr-3"></i> + 90 555 555 55 55</p><hr>
      <p><i class="fas fa-print mr-3"></i> + 90 666 666 66 66</p><hr class="pb-3">

      <div class="pt-5 text-center">
        <a class="fb-ic"><i class="fab fa-facebook-square white-text mr-4 social-icon-size"> </i></a>
        <a class="tw-ic"><i class="fab fa-twitter white-text mr-4 social-icon-size"> </i></a>
        <a class="gplus-ic"><i class="fab fa-google-plus-g white-text mr-4 social-icon-size"> </i></a>
        <a class="li-ic"><i class="fab fa-linkedin-in white-text mr-4 social-icon-size"> </i></a>
        <a class="ins-ic"><i class="fab fa-instagram white-text social-icon-size"> </i></a>
      </div>

    </div>

  </div>

</div>

@endsection
