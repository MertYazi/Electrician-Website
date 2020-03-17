@extends('layouts.layout')

@section('content')

<div class="container-fluid px-0 py-0">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img class="d-block w-100 cover-image" src="img/references.jpg">
    </div>
  </div>
</div>


<div class="container-fluid px-5 py-4">

  <div class="text-center">

    <h3 class="display-4 text-center">Our References</h3>
    <p class="lead text-center">Here is some good companies and individuals which worked with us!</p>

  </div>

  <div class="row justify-content-center px-1 py-2">

    <div class="col-sm-6 col-md-4 py-3">
      <div class="container profile-container px-0 py-0">
        <a href="#"><img src="img/reference.jpg" class="image profile-image rounded">
        <div class="overlay profile-overlay text-center">
            <h4 class="references-padding">Company Name</h4>
        </div></a>
      </div>
     </div>

     <div class="col-sm-6 col-md-4 py-3">
       <div class="container profile-container px-0 py-0">
         <a href="#"><img src="img/reference.jpg" class="image profile-image rounded">
         <div class="overlay profile-overlay text-center">
             <h4 class="references-padding">Company Name</h4>
         </div></a>
       </div>
      </div>

      <div class="col-sm-6 col-md-4 py-3">
        <div class="container profile-container px-0 py-0">
          <a href="#"><img src="img/reference.jpg" class="image profile-image rounded">
          <div class="overlay profile-overlay text-center">
              <h4 class="references-padding">Company Name</h4>
          </div></a>
        </div>
       </div>

  </div>

</div>

@endsection
