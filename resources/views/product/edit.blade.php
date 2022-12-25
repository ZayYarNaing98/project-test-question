@extends('layouts.main')

@section('content')

    <div class="container">

        <div class="container row">
            <h4 class="text-secondary my-4 col-10">Product Edit</h4>
            <a href="{{ url('/products') }}" class="btn btn-secondary btn-md col-2 my-4">Back</a>
        </div>

        <form method="POST" action="{{ url("/products/update/$product->id") }}">
            @csrf

            <div class="mb-3">
                <label for="Name">Enter New Name:</label>
                <input type="text" name="Name" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="Detail">Enter New Detail:</label>
                <input type="text" name="Detail" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">
                Update Product
            </button>
        </form>
    </div>

@endsection
