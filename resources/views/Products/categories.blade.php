@extends('layouts.app')
@section('content')

<h2>{{ __('Categories') }} </h2>

<section class="categories-cards">
    <article class="clothes-card card">
        <section class="card-header">
            <h2>{{ __('Vêtements') }}</h2>
        </section>
        <section class="card-body">
            <a href="{{ Route('clothes') }}" class="card-link">
                <img src="{{ asset('/storage/shopping/clothes.jpg') }}">
            </a>
        </section>
    </article>

    <article class="hats-card card">
        <section class="card-header">
            <h2>{{ __('Cheveu') }}</h2>
        </section>
        <section class="card-body">
            <a href="{{ Route('hats') }}" class="card-link">
                <img src="{{ asset('/storage/shopping/hats.jpg') }}">
            </a>
        </section>
    </article>

    <article class="bags-card card">
        <section class="card-header">
            <h2>{{ __('Sacs') }}</h2>
        </section>
        <section class="card-body">
            <a href="{{ Route('bags') }}" class="card-link">
                <img src="{{ asset('/storage/shopping/bags.jpg') }}">
            </a>
        </section>
    </article>

    <article class="shoes-card card">
        <section class="card-header">
            <h2>{{ __('Chaussures') }}</h2>
        </section>
        <section class="card-body">
            <a href="{{ Route('shoes') }}" class="card-link">
                <img src="{{ asset('/storage/shopping/shoes.jpg') }}">
            </a>
        </section>
    </article>
</section>
    
@endsection
   