@extends('layouts.application')

@section('tittle')
    Create Comment
@endsection

@section('application')

<form action="{{ route('comment.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="mb-3">
        <select name="product_id" class="form-select" aria-label="Choose Product">
            @foreach ($products as $product)
                <option value="{{ $product['id'] }}">{{ $product['name'] }}</option>
            @endforeach
        </select>
    </div>
    @error('product_id')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Comment</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3">{{ old('comment') }}</textarea>
    </div>
    @error('comment')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Rating</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rating" name="rating" value="{{ old('rating') }}">
    </div>
    @error('rating')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <input class="btn btn-success" type="submit">
</form>
@endsection
