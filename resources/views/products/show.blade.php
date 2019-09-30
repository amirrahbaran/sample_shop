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
    </div>
@endsection
