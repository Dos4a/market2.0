@extends('layouts.application')

@section('title')
    Product {{ $product['name'] }}
@endsection

@section('application')

<div class="card text-bg-dark mb-3">
    @if (!empty($product->images))
        <div class="container-sm">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach (json_decode($product->images, true) as $image)
                        <div class="carousel-item">
                            <img src="{{ $image }}" class="d-block w-50 rounded mx-auto d-block" alt="...">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    @endif
    <div class="card-body">
      <h5 class="card-title">{{ $product['name'] }}</h5>
      <p class="card-text">{{ $product['description'] }}</p>
      <p class="card-text"><small class="text-muted">{{ $product->categories['name'] }}</small></p>
      <p class="card-text"><small class="text">{{ $product['price'] }}</small> $</p>
    </div>
</div>





@endsection
