@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('products.store')}}">
            @csrf
            <input type="hidden" name="_method" value="POST">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="input" class="form-control" id="name" name="name" aria-describedby="name">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="input" class="form-control" id="price" aria-describedby="price" name="price">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
@endsection
