@extends('layouts.main')

@section('content')

    @if (session('info'))
        <div class="alert alert-info mt-3">
            {{ session("info") }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <h1 class="h2 my-4 col-10">PRODUCT LIST</h1>
            <a href="{{ url('/products/add') }}" class="btn btn-outline-success btn-sm my-4 col-2">
                + Create New Product
            </a>
        </div>
        <table class="table table-striped table-md">
            <tr class="bg-primary">
                <th class="text-white">No</th>
                <th class="text-white">Name</th>
                <th class="text-white">Detail</th>
                <th class="text-white" colspan="3">Action</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['Name'] }}</td>
                <td>{{ $product['Detail'] }}</td>

                {{-- Detail --}}
                <td>
                    <a href="{{ url("/products/detail/$product->id") }}">
                        <i class="fa-solid fa-circle-info text-secondary"></i>
                    </a>
                </td>

                {{-- Edit --}}
                <td>
                    <a href="{{ url("/products/edit/$product->id") }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </td>

                {{-- Delete --}}
                <td>
                    <a href="{{ url("products/delete/$product->id") }}">
                        <i class="fa-solid fa-trash-can text-danger"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
