@extends('layouts.main')

@section('content')
    <div class="container">

        <div class="container row">
            <h4 class="text-secondary my-4 col-10">Add New Product</h4>
            <a href="{{ url('/products') }}" class="btn btn-secondary btn-md col-2 my-4">Back</a>
        </div>

        <form method="POST" action="{{ url('/products/add') }}">
            @csrf

            <div class="mb-3">
                <label for="Name">Name:</label>
                <input type="text" name="Name" class="form-control"/>
            </div>
            <div class="mb-3">
                <label for="Detail">Detail:</label>
                <input type="text" name="Detail" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">
                + Add Product
            </button>

        </form>

    </div>
@endsection
