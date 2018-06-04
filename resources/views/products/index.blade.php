@extends('layouts.master')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
    <h1 class="h2">List of products on store {{ $store->name }}</h1>

    <div class="col-8 ml-auto mr-auto">
        <table id="table_id" class='table'>
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($store->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->comment }}</td>
                    <td><a href="">Actions</a> </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <br>

        <div>
            <a href="/stores/{{ $store->id }}/products/create" class="btn btn-primary">Add Product</a>
        </div>
    </div>
@endsection


@section('scripts')
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $('#table_id').DataTable();
        });
    </script>
@endsection

