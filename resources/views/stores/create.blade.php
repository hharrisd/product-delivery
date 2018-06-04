@extends('layouts.master')

@section('content')

    <form method="POST" action="/stores">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Store Name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                   required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
        </div>
        <maps @lati="getLat($event)" @long="getLng($event)"></maps>
        {{--Lat--}}
        <input type="hidden" name="lat" v-model="lat">
        {{--Lng--}}
        <input type="hidden" name="lng" v-model="lng">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @include('layouts.errors')
    </form>

@endsection