@extends('layouts.app')
@section('content')
<section class="cards">
<article class="card">
    <section class="card-header">
        <h5 class="card-title">Le Foulonné</h5>
        <h6 class="card-subtitle mb-2 text-muted">Longchamp</h6>
    </section>
    <img src="{{asset('/storage/shopping/example_3.jpg')}}" class="card-img-top" alt="Image 3">
    <section class="card-body">
        <p class="card-text">Le Foulonné - Longchamp...</p>
    </section>
    <section class="card-shopping">    
        <span class="card-text">420 €</span>
        <a href="#" class="card-link"><i class="fas fa-2x fa-shopping-cart product-cart" aria-hidden="true"></i></a>
    </section>
    <section class="card-footer">
          <a href="#" class="card-link">Add to wishlist</a>
    </section>
</article>
</section>
@endsection