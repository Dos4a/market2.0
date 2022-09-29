@extends('layouts.application')

@section('title')
    Category Home
@endsection

@section('application')

<h2>Category Table</h2>

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
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $category['id'] }}</th>
                <td><a href="{{ route('category.show', $category['id']) }}">{{ $category['name'] }}</a></td>
                <td><a href="{{ route('category.edit', $category['id']) }}" class="btn btn-warning">Update</a></td>
                <td>
                    <form action="{{ route('category.destroy', $category['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('category.create') }}" class="btn btn-primary">Create New Category</a>


@endsection
