@extends('layouts.application')

@section('title')
    Comment Home
@endsection

@section('application')

<h2>Comment Table</h2>

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
        <th>User Name</th>
        <th>Product Name</th>
        <th>Comment</th>
        <th>Rating</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
            <tr>
                <th scope="row">{{ $comment['id'] }}</th>
                <th>{{ $comment->users['name'] }}</th>
                <th>{{ $comment->products['name'] }}</th>
                <th>{{ $comment['comment'] }}</th>
                <th>{{ $comment['rating'] }}</th>
                <td><a href="{{ route('comment.edit', $comment['id']) }}" class="btn btn-warning">Update</a></td>
                <td>
                    <form action="{{ route('comment.destroy', $comment['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

<a href="{{ route('comment.create') }}" class="btn btn-primary">Create New Comment</a>


<div class="pagination justify-content-center">
    {{ $comments->links() }}
</div>

@endsection
