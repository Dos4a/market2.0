@extends('layouts.application')

@section('title')
    Product {{ $product['name'] }}
@endsection

@section('application')

<div class="card text-bg-dark mb-3">
    <div class="container-sm">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.ebayimg.com/images/g/BwgAAOSwMxpjGWFz/s-l1600.jpg" class="d-block w-50 rounded mx-auto d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ebayimg.com/images/g/qEcAAOSwLP5jKehE/s-l1600.jpg" class="d-block w-50 rounded mx-auto d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ebayimg.com/images/g/HJ4AAOSwxzVhQL8T/s-l640.jpg" class="d-block w-50 rounded mx-auto d-block" alt="...">
            </div>
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
    <div class="card-body">
      <h5 class="card-title">{{ $product['name'] }}</h5>
      <p class="card-text">{{ $product['description'] }}</p>
      <p class="card-text"><small class="text-muted">{{ $product->categories['name'] }}</small></p>
      <p class="card-text"><small class="text">{{ $product['price'] }}</small> $</p>
    </div>
</div>





@endsection
