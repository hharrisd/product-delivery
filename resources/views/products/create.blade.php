@extends('layouts.master')

@section('content')

    <form method="POST" action="/stores/products">
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
            <label for="comment">Comment</label>
            <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Product</button>
        </div>

        <input type="hidden" name="store_id" value="{{ $store->id }}">

        @include('layouts.errors')
    </form>

@endsection