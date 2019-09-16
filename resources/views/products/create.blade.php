@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                Create Product
            </h5>
            <div class="card-text">
                <form method="POST" action="{{ route('products.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="productName">Name</label>
                        <input type="text" class="form-control" id="productName" name="productName" placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Description</label>
                        <input type="text" class="form-control" id="productDescription" name="productDescription" placeholder="Enter product description">
                    </div>
                    <div class="form-group">
                        <label for="productWeight">Weight</label>
                        <input type="number" class="form-control" id="productWeight" name="productWeight" placeholder="Enter product weight">
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price</label>
                        <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="Enter product price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection