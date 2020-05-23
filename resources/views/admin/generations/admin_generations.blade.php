@extends('layouts.admin')

@section('content')

<form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="caption"><b>Generation Caption:</b> {{ $generation->caption }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="text"><b>Generation Text:</b> {{ $generation->text }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="image"><b>Generation Image:</b> {{ $generation->image }}</label>
    </div>
    <div class="form-group col-md-12">
      <label for="origin"><b>Generation Origin:</b> {{ $generation->origin }}</label>
    </div>
  </div>
  <a class="btn btn-primary" href="/admin/generations/1/edit" role="button">Edit</a>
</form>

@endsection
