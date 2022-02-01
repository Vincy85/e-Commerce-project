@extends('layouts.app')
@section('content')

<section class="cards">
    <article class="card">
        <section class="card-header">
            <h5 class="card-title">T-shirt</h5>
            <h6 class="card-subtitle mb-2 text-muted"> Sézane</h6>
        </section>
        <img src="{{asset('/storage/shopping/example_1.jpg')}}" class="card-img-top" alt="Image 1">
        <section class="card-body">
            <p class="card-text">T-shirt Sézane....</p>    
        </section>
        <section class="card-shopping">
            <h4 class="card-text">40 €</h4>
            <a href="#" class="card-link"><i class="fas fa-2x fa-shopping-cart product-cart" aria-hidden="true"></i></a>
        </section>
        <section class="card-footer">
            <p class="card-link">Add to wishlist</p>  
        </section>
    </article>
</section>
@endsection
    