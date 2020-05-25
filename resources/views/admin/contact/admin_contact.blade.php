@extends('layouts.admin')

@section('content')

<form>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="contact_text"><b>Contact Text:</b> {{ $contact->contact_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_address_short"><b>Address Short:</b> {{ $contact->contact_address_short }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_address_long"><b>Address Long:</b> {{ $contact->contact_address_long }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_email"><b>Email:</b> {{ $contact->contact_email }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_phone"><b>Phone:</b> {{ $contact->contact_phone }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_fax"><b>Fax:</b> {{ $contact->contact_fax }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_facebook_link"><b>Facebook Link:</b> {{ $contact->contact_facebook_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_twitter_link"><b>Twitter Link:</b> {{ $contact->contact_twitter_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_googleplus_link"><b>Googleplus Link:</b> {{ $contact->contact_googleplus_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_linkedin_link"><b>Linkedin Link:</b> {{ $contact->contact_linkedin_link }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="contact_instagram_link"><b>Instagram Link:</b> {{ $contact->contact_instagram_link }}</label>
    </div>
  </div>
  <a class="btn btn-primary" href="/admin/contact/1/edit" role="button">Edit</a>
</form>

@endsection
