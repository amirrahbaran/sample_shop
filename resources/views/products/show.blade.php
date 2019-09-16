@extends('layouts.app')

@section('content')
    <h1 class="mt-5">
        {{$product->name}}
    </h1>
    <p>
        {{$product->description}}
    </p>
@endsection