@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td><a href="{{route('products.show', $product->id)}}">{{ $product->name }}</a></td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td width="80">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-default">Edit</a>
                        </td>
                        <td width="80">
                            <form method="POST" id="delete-form-{{$product->id}}" action="{{route('products.destroy', [$product->id])}}">
                                {{csrf_field()}}
                                <input type="submit" name="destroy" value="Delete" class="btn btn-danger">
                                <input type="hidden" name="_method" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
