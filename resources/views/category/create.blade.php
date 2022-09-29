@extends('layouts.application')

@section('tittle')
    Create Category
@endsection

@section('application')

<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" value="{{ old('name') }}">
      </div>
      @error('name')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
      @enderror
      <input class="btn btn-success" type="submit">
      </div>
</form>
@endsection
