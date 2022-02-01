<section class="cards">

    <article class="card">
        <section class="card-header">
            <h2 class="card-title">{{ __('En Soldes')  }}</h2>
        </section>
        <section class="card-body">
        <a href="#"><img src="{{asset('/storage/shopping/example_1.jpg')}}" class="card-img-top" alt="Image 1"></a>
        </section>
        <section class="card-footer">
        <p class="card-text"><a href="#"> en savoir plus</a></p>
        </section>
    </article>
    <article class="card">
        <section class="card-header">
            <h2 class="card-title">{{ __('Meilleure Affaire')  }}</h2>
        </section>
        <section class="card-body">
        <a href="#"><img src="{{asset('/storage/shopping/example_1.jpg')}}" class="card-img-top" alt="Image 1"></a>
        </section>
        <section class="card-footer">
        <p class="card-text"><a href="#"> en savoir plus</a></p>
        </section>
    </article>
    
    
    <article class="card">
        <section class="card-header">
            <h2 class="card-title">{{ __('Derniers Arrivages')  }}</h2>
        </section>
        <section class="card-body">
        <a href="#"><img src="{{asset('/storage/shopping/example_1.jpg')}}" class="card-img-top" alt="Image 1"></a>
        </section>
        <section class="card-footer">
        <p class="card-text"><a href="#"> en savoir plus</a></p>
        </section>
    </article>
    
    <article class="card">
        <section class="card-header">
            <h2 class="card-title">{{ __('Catégories')  }}</h2>
        </section>
        <section class="card-body">
        <a href="{{ Route('categories') }}"><img src="{{ asset('/storage/shopping/example_1.jpg') }}" class="card-img-top" alt="Image 1"></a>
        </section>
        <section class="card-footer">
        <p class="card-text"><a href="{{ Route('categories') }}"> en savoir plus</a></p>
        </section>
    </article>
</section>
