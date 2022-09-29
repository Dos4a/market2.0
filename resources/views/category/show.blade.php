@extends('layouts.application')

@section('tittle')
    Category {{ $category['name'] }}
@endsection

@section('application')
<div class="container text-center">
    <div class="row">
        @foreach ($category->products as $product)
            <div class="col">
                <div class="card mt-4" style="width: 18rem">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-tittle">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $product['price'] }} $</h6>
                        <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
