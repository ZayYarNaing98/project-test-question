@extends('layouts.main')

@section('content')

    <div class="container">

        <div class="container row">
            <h4 class="text-secondary my-4 col-10">Product Detail</h4>
            <a href="{{ url('/products') }}" class="btn btn-secondary btn-md col-2 my-4">Back</a>
        </div>

        <table class="table table-bordered table-md">
            <tr class="bg-primary text-white">
                <th>No</th>
                <th>Detail</th>
                <th>Name</th>
            </tr>
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['Name'] }}</td>
                <td>{{ $product['Detail'] }}</td>
            </tr>
        </table>
    </div>

@endsection
