@extends('layouts.application')

@section('tittle')
    Create Product
@endsection

@section('application')

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="mb-3">
        <select name="category_id" class="form-select" aria-label="Choose Category">
            @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
      </div>
      @error('category_id')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" value="{{ old('name') }}" required>
      </div>
      @error('name')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required>{{ old('description') }}</textarea>
      </div>
      @error('description')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price" name="price" value="{{ old('price') }}" required>
      </div>
      @error('price')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
      @enderror
      <div class="mb-3">
        <label for="formFile" class="form-label">Images</label>
        <input type="file" class="form-control" id="formFile" name="images[]" multiple required>
      </div>
      @error('images')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
      @enderror
      <input class="btn btn-success" type="submit">
</form>
@endsection
