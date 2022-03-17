@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('products.update', $product->id)}}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="input" class="form-control" id="name" name="name" aria-describedby="name" value="{{ $product->name }}">
            </div>
            <div class="form-group">
                <label for="price">Product Name</label>
                <input type="input" class="form-control" id="price" aria-describedby="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
