@extends('layouts.master')

@section('content')

    <form method="POST" action="/stores/{{ $store->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Store Name" required value="{{ $store->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                   required  value="{{ $store->description }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required  value="{{ $store->address }}">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="City" required value="{{ $store->city }}">
        </div>
        <maps></maps>

        <input type="text" v-model="currentPlace">
        {{--Lat--}}
        <input type="hidden" name="lat" value="{{ $store->lat }}">
        {{--Lng--}}
        <input type="hidden" name="lng" value="{{ $store->lng }}">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Store</button>
        </div>

        @include('layouts.errors')
    </form>

@endsection