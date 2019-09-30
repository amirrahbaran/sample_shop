@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($products as $product)
            <div>
                <a href="products/{{$product->id}}">
                    {{$product->name}}
                </a>
                <p>
                    creator: {{$product->user->name}}
                </p>
            </div>
        @endforeach
    </div>
@endsection