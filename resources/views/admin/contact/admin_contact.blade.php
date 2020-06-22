@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_text"><b>Contact Text</b></label>
      </th>
      <td colspan="5">
        <label for="contact_text">{{ $contact->contact_text }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_address_short"><b>Address Short</b></label>
      </th>
      <td colspan="5">
        <label for="contact_address_short">{{ $contact->contact_address_short }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_address_long"><b>Address Long</b></label>
      </th>
      <td colspan="5">
        <label for="contact_address_long">{{ $contact->contact_address_long }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_email"><b>Email</b></label>
      </th>
      <td colspan="5">
        <label for="contact_email">{{ $contact->contact_email }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_phone"><b>Phone</b></label>
      </th>
      <td colspan="5">
        <label for="contact_phone">{{ $contact->contact_phone }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_fax"><b>Fax</b></label>
      </th>
      <td colspan="5">
        <label for="contact_fax">{{ $contact->contact_fax }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_facebook_link"><b>Facebook Link</b></label>
      </th>
      <td colspan="5">
        <label for="contact_facebook_link">{{ $contact->contact_facebook_link }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_twitter_link"><b>Twitter Link</b></label>
      </th>
      <td colspan="5">
        <label for="contact_twitter_link">{{ $contact->contact_twitter_link }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_googleplus_link"><b>Googleplus Link</b></label>
      </th>
      <td colspan="5">
        <label for="contact_googleplus_link">{{ $contact->contact_googleplus_link }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_linkedin_link"><b>Linkedin Link</b></label>
      </th>
      <td colspan="5">
        <label for="contact_linkedin_link">{{ $contact->contact_linkedin_link }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_instagram_link"><b>Instagram Link</b></label>
      </th>
      <td colspan="5">
        <label for="contact_instagram_link">{{ $contact->contact_instagram_link }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td class="text-center" colspan="4"><a class="btn btn-primary" href="/admin/contact/1/edit" role="button">Edit</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
