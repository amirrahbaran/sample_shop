@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($products as $product)
            <div>
                <a href="products/{{$product->id}}">
                {{$product->name}}
                </a>
            </div>
        @endforeach
    </div>
@endsection