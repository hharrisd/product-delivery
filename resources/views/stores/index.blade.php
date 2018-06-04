@extends('layouts.master')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
    <h1 class="h2">List of stores</h1>

    <div class="col-8 ml-auto mr-auto">
        <table id="table_id" class='table'>
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Address</th>
                <th>City</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stores as $store)
                <tr>
                    <td><a href="/stores/{{ $store->id }}">{{ $store->name }}</a></td>
                    <td>{{ $store->description }}</td>
                    <td>{{ $store->address }}</td>
                    <td>{{ $store->city }}</td>
                    <td>
                        <a href="/stores/{{ $store->id }}/products">Add products</a>

                        <a href="/stores/{{ $store->id }}/edit">Edit Store</a>

                        <a class="nav-link" href="#"
                           onclick="event.preventDefault(); document.getElementById('delete-store-form').submit();">
                            Delete Store
                        </a>

                        <form id="delete-store-form" action="/stores/{{ $store->id }}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <br>

        <div>
            <a href="/stores/create" class="btn btn-primary">Add Store</a>
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