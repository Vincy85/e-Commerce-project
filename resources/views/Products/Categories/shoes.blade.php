@extends('layouts.app')
@section('content')
<section class="cards">
<article class="card">
    <section class="card-header">
       <h5 class="card-title">Pumps Kate 85</h5>
        <h6 class="card-subtitle mb-2 text-muted">Christian Louboutin</h6>
    </section>
    <img src="{{asset('/storage/shopping/example_2.jpg')}}" class="card-img-top" alt="Image 2">
    <section class="card-body">
        <p class="card-text">Pumps Kate 85 Christian Louboutin...</p>
    </section>
    <section class="card-shopping">    
        <span class="card-text">600 €</span>  
        <a href="#" class="card-link"><i class="fas fa-2x fa-shopping-cart product-cart" aria-hidden="true"></i></a>
    </section>
    <section class="card-footer">
        <a href="#" class="card-link">Add to wishlist</a>
    </section>
</article>
</section>
@endsection
