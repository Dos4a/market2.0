@extends('layouts.application')

@section('title')
    Category Update
@endsection

@section('application')

<form action="{{ route('category.update', $category['id']) }}" method="POST">
    @csrf
    @method('PUT')
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" value="{{ $category['name'] }}" required>
      </div>
      @error('name')
          <div class="alert alert-danger">
            {{ $message }}
          </div>
      @enderror
      <input class="btn btn-success" type="submit">
</form>

@endsection
