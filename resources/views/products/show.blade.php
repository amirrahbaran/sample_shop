@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">
            {{$product->name}}
        </h1>
        <p>
            description: {{$product->description}}
        </p>
        <p>
            price: {{$product->price}}
        </p>
        <p>
            weight: {{$product->weight}}
        </p>
        <p>
            owner: {{$product->user->name}}
        </p>

        <div>
            <a href="{{ route('products.index') }}">Return to index</a>
        </div>

    </div>
@endsection
