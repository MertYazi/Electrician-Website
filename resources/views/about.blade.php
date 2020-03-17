@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 cover-image" src="img/about.jpg">
    </div>
  </div>
</div>

<div class="container-fluid px-5 py-4">

  <div class="text-center">
    <h3 class="display-4 text-center">About Us</h3>
    <p class="lead text-center">Here is some information to get to know us!</p>
  </div>

  <div class="row justify-content-center py-3">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <img src="img/history.jpg" class="image profile-image rounded">
      <h3 class="display-5 text-center pt-3">Our History</h3>
      <p class="pt-2">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <img src="img/mission.jpg" class="image profile-image rounded">
      <h3 class="display-5 text-center pt-3">Our Mission</h3>
      <p class="pt-2">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <img src="img/vision.jpg" class="image profile-image rounded">
      <h3 class="display-5 text-center pt-3">Our Vision</h3>
      <p class="pt-2">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

  </div>

</div>

@endsection
