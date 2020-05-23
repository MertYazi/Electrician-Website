@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/contact/1">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="contact_text"><b>Contact Text</b></label>
      <textarea class="form-control" id="contact_text" name="contact_text" rows="3">{{ $contact->contact_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="address_short"><b>Address Short</b></label>
      <input type="text" class="form-control" id="address_short" name="address_short" value="{{ $contact->address_short }}">
    </div>
    <div class="form-group col-md-12">
      <label for="address_long"><b>Address Long</b></label>
      <input type="text" class="form-control" id="address_long" name="address_long" value="{{ $contact->address_long }}">
    </div>
    <div class="form-group col-md-12">
      <label for="email"><b>Email</b></label>
      <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}">
    </div>
    <div class="form-group col-md-12">
      <label for="telephone"><b>Phone</b></label>
      <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $contact->telephone }}">
    </div>
    <div class="form-group col-md-12">
      <label for="fax"><b>Fax</b></label>
      <input type="text" class="form-control" id="fax" name="fax" value="{{ $contact->fax }}">
    </div>
    <div class="form-group col-md-12">
      <label for="facebook_link"><b>Facebook Link</b></label>
      <input type="url" class="form-control" id="facebook_link" name="facebook_link" value="{{ $contact->facebook_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="twitter_link"><b>Twitter Link</b></label>
      <input type="url" class="form-control" id="twitter_link" name="twitter_link" value="{{ $contact->twitter_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="googleplus_link"><b>Googleplus Link</b></label>
      <input type="url" class="form-control" id="googleplus_link" name="googleplus_link" value="{{ $contact->googleplus_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="linkedin_link"><b>Linkedin Link</b></label>
      <input type="url" class="form-control" id="linkedin_link" name="linkedin_link" value="{{ $contact->linkedin_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="instagram_link"><b>Instagram Link</b></label>
      <input type="url" class="form-control" id="instagram_link" name="instagram_link" value="{{ $contact->instagram_link }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
