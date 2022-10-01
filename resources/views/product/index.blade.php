@extends('layouts.application')

@section('title')
    Product Home
@endsection

@section('application')

<h2>Product Table</h2>

@if (session()->has('successCreate'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> {{ session()->get('successCreate') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('successUpdate'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> {{ session()->get('successUpdate') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session()->has('successDelete'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> {{ session()->get('successDelete') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Avg Rating</th>
        <th scope="col">Images</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product['id'] }}</th>
                <td>{{ $product->categories['name'] }}</td>
                <td><a href="{{ route('product.show', $product['id']) }}">{{ $product['name'] }}</a></td>
                <td>{{ $product['description'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product->comments->avg('rating') }}</td>
                <td>
                    @if (!empty($product->images))
                        @foreach (json_decode($product->images, true) as $image)
                            <img class="w-25 p-0" src="{{ asset($image) }}">
                        @endforeach
                    @endif
                </td>
                <td><a href="{{ route('product.edit', $product['id']) }}" class="btn btn-warning">Update</a></td>
                <td>
                    <form action="{{ route('product.destroy', $product['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('product.create') }}" class="btn btn-primary">Create New Product</a>


@endsection
