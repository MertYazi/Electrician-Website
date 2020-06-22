@extends('layouts.admin')

@section('content')

<form method="POST" action="/admin/generations/1" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-row">
    <div class="form-group col-md-12">
      <label class="text-orange" for="generation_caption"><b>Generations Caption</b></label>
      <input type="text" class="form-control @error('generation_caption') is-invalid @enderror" id="generation_caption" name="generation_caption" value="{{ $generation->generation_caption }}">
      @error('generation_caption')
      <p class="alert alert-danger">{{ $errors->first('generation_caption') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="generation_text"><b>Generations Text</b></label>
      <textarea class="form-control @error('generation_text') is-invalid @enderror" id="generation_text" name="generation_text" rows="3">{{ $generation->generation_text }}</textarea>
      @error('generation_text')
      <p class="alert alert-danger">{{ $errors->first('generation_text') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="generation_image"><b>Generations Image</b></label>
      <input type="file" class="form-control-file @error('generation_image') is-invalid @enderror" id="generation_image" name="generation_image" value="{{ $generation->generation_image }}">
      @error('generation_image')
      <p class="alert alert-danger">{{ $errors->first('generation_image') }}</p>
      @enderror
    </div>
    <div class="form-group col-md-12">
      <label class="text-orange" for="generation_origin"><b>Generations Origin</b></label>
      <input type="number" class="form-control @error('generation_origin') is-invalid @enderror" id="generation_origin" name="generation_origin" value="{{ $generation->generation_origin }}">
      @error('generation_origin')
      <p class="alert alert-danger">{{ $errors->first('generation_origin') }}</p>
      @enderror
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
