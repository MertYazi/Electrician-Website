@extends('layouts.admin')

@section('content')

<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="help_caption"><b>Help Caption:</b> {{ $help->help_caption }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="help_keywords"><b>Help Keywords:</b> {{ $help->help_keywords }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="decide_text"><b>Decide Text:</b> {{ $help->decide_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="decide_image"><b>Decide Image:</b> {{ $help->decide_image }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="reach_text"><b>Reach Text:</b> {{ $help->reach_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="reach_image"><b>Reach Image:</b> {{ $help->reach_image }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="consult_text"><b>Consult Text:</b> {{ $help->consult_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="consult_image"><b>Consult Image:</b> {{ $help->consult_image }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="get_service_text"><b>Get Service Text:</b> {{ $help->get_service_text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="get_service_image"><b>Get Service Image:</b> {{ $help->get_service_image }}</label>
    </div>
  </div>
  <a class="btn btn-primary" href="/admin/help/1/edit" role="button">Edit</a>
</form>

@endsection
