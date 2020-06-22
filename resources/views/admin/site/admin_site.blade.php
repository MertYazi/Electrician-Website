@extends('layouts.admin')

@section('content')

<table class="table table-borderless">
  <tbody>
    <tr>
      <th scope="row">
        <label class="text-orange" for="site_name"><b>Site Name</b></label>
      </th>
      <td colspan="5">
        <label for="site_name">{{ $site->site_name }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="site_year"><b>Site Year</b></label>
      </th>
      <td colspan="5">
        <label for="site_year">{{ $site->site_year }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="site_description"><b>Site Description</b></label>
      </th>
      <td colspan="5">
        <label for="site_description">{{ $site->site_description }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="references_caption"><b>References Caption</b></label>
      </th>
      <td colspan="5">
        <label for="references_caption">{{ $site->references_caption }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="references_cover"><b>References Cover</b></label>
      </th>
      <td colspan="5">
        <img class="image-small" src="{{ asset('img/'.$site->references_cover) }}" alt="{{ $site->references_cover }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="references_cover">{{ $site->references_cover }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="about_caption"><b>About Caption</b></label>
      </th>
      <td colspan="5">
        <label for="about_caption">{{ $site->about_caption }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="about_cover"><b>About Cover</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$site->about_cover) }}" alt="{{ $site->about_cover }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="about_cover">{{ $site->about_cover }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_caption"><b>Contact Caption</b></label>
      </th>
      <td colspan="5">
        <label for="contact_caption">{{ $site->contact_caption }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="contact_cover"><b>Contact Cover</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$site->contact_cover) }}" alt="{{ $site->contact_cover }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="contact_cover">{{ $site->contact_cover }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="services_caption"><b>Services Caption</b></label>
      </th>
      <td colspan="5">
        <label for="services_caption">{{ $site->services_caption }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="services_cover"><b>Services Cover</b></label>
      </th>
      <td colspan="5">
        <img class="image-small ml-1" src="{{ asset('img/'.$site->services_cover) }}" alt="{{ $site->services_cover }}">
        <div class="image-modal">
          <span class="close">&times;</span>
          <img class="modal-content image-large">
          <div class="modal-caption"></div>
        </div>
        <label class="pl-2" for="services_cover">{{ $site->services_cover }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row">
        <label class="text-orange" for="team_caption"><b>Team Caption</b></label>
      </th>
      <td colspan="5">
        <label for="team_caption">{{ $site->team_caption }}</label>
      </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td class="text-center" colspan="4"><a class="btn btn-primary" href="/admin/site/1/edit" role="button">Edit</a></td>
      <td></td>
    </tr>
  </tbody>
</table>

@endsection
