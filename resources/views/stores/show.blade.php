@extends('layouts.master')

@section('content')
    <h1>{{ $store->name }}</h1>
    <hr>
    <ul>
        <li>{{ $store->description }}</li>
        <li>{{ $store->address }}</li>
        <li>{{ $store->city }}</li>
    </ul>
@endsection