@extends('layouts.admin')

@section('content')

<form>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="contact_text"><b>Contact Text:</b> {{ $contact->contact_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="address_short"><b>Address Short:</b> {{ $contact->address_short }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="address_long"><b>Address Long:</b> {{ $contact->address_long }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="email"><b>Email:</b> {{ $contact->email }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="telephone"><b>Phone:</b> {{ $contact->telephone }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="fax"><b>Fax:</b> {{ $contact->fax }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="facebook_link"><b>Facebook Link:</b> {{ $contact->facebook_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="twitter_link"><b>Twitter Link:</b> {{ $contact->twitter_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="googleplus_link"><b>Googleplus Link:</b> {{ $contact->googleplus_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="linkedin_link"><b>Linkedin Link:</b> {{ $contact->linkedin_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="instagram_link"><b>Instagram Link:</b> {{ $contact->instagram_link }}</label>
    </div>
  </div>
  <a class="btn btn-primary" href="/admin/contact/1/edit" role="button">Edit</a>
</form>

@endsection
