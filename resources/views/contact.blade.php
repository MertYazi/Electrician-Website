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

      <form>
        <div class="form-group">
          <input type="text" class="form-control border-0" id="InputText1" placeholder="Enter name">
        </div><hr>
        <div class="form-group">
          <input type="email" class="form-control border-0" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div><hr>
        <div class="form-group">
          <input type="text" class="form-control border-0" id="InputText2" placeholder="Enter subject">
        </div><hr>
        <div class="form-group">
          <textarea class="form-control border-0" id="FormControlTextarea1" rows="2" placeholder="Enter your message"></textarea>
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
