@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/contact/1" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="contact_text"><b>Contact Text</b></label>
      <textarea class="form-control" id="contact_text" name="contact_text" rows="3">{{ $contact->contact_text }}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_address_short"><b>Address Short</b></label>
      <input type="text" class="form-control" id="contact_address_short" name="contact_address_short" value="{{ $contact->contact_address_short }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_address_long"><b>Address Long</b></label>
      <input type="text" class="form-control" id="contact_address_long" name="contact_address_long" value="{{ $contact->contact_address_long }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_email"><b>Email</b></label>
      <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $contact->contact_email }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_phone"><b>Phone</b></label>
      <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ $contact->contact_phone }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_fax"><b>Fax</b></label>
      <input type="text" class="form-control" id="contact_fax" name="contact_fax" value="{{ $contact->contact_fax }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_facebook_link"><b>Facebook Link</b></label>
      <input type="url" class="form-control" id="contact_facebook_link" name="contact_facebook_link" value="{{ $contact->contact_facebook_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_twitter_link"><b>Twitter Link</b></label>
      <input type="url" class="form-control" id="contact_twitter_link" name="contact_twitter_link" value="{{ $contact->contact_twitter_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_googleplus_link"><b>Googleplus Link</b></label>
      <input type="url" class="form-control" id="contact_googleplus_link" name="contact_googleplus_link" value="{{ $contact->contact_googleplus_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_linkedin_link"><b>Linkedin Link</b></label>
      <input type="url" class="form-control" id="contact_linkedin_link" name="contact_linkedin_link" value="{{ $contact->contact_linkedin_link }}">
    </div>
    <div class="form-group col-md-12">
      <label for="contact_instagram_link"><b>Instagram Link</b></label>
      <input type="url" class="form-control" id="contact_instagram_link" name="contact_instagram_link" value="{{ $contact->contact_instagram_link }}">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
