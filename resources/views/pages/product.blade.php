@extends('layouts.app')

@section('content')

<div class="container">
    <article class="card product-single">

        {{-- image --}}

        {{-- card content --}}
        <div class="card-content">

            <header class="product-header">
                {{-- title --}}
                <h1>{{ $product->title }}</h1>

                {{-- byline --}}
                <div class="byline">

                </div>
            </header>


        </div>

    </article>
</div>

@endsection
