@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$product->name}}</h1>
        <h3>{{$product->price}}</h3>
        <p>{{$product->description}}</p>
    </div>
@endsection
