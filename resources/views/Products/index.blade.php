<x-layouts.app title="{{ $title }}">
    
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
            <a href="#" class="card-link">Add to wishlist</a>
    </article>

    <article class="card">
        <section class="card-header">
            <h5 class="card-title">Béret Basco</h5>
            <h6 class="card-subtitle mb-2 text-muted">Barascon</h6>
        </section>
            <img src="{{asset('/storage/shopping/example_4.jpg')}}" class="card-img-top" alt="Image 3">
        <section class="card-body">
            <p class="card-text">Béret Basco - Barascon...</p>
        </section>
        <section class="card-shopping">      
            <span class="card-text">30 €</span>  
            <a href="#" class="card-link"><i class="fas fa-2x fa-shopping-cart product-cart" aria-hidden="true"></i></a>
        </section>
        <section class="card-footer">
            <a href="#" class="card-link">Add to wishlist</a> 
            </section>
    </article>
    
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

</x-layouts.app>