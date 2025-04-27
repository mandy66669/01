@extends('layouts.app')

@section('content')
<div class="container">
    <h2>🥦 Products</h2>
    <a href="{{ route('admin.products.create') }}" class="btn btn-success mb-3">Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead><tr><th>Name</th><th>Category</th><th>Price</th><th>Action</th></tr></thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>${{ $product->price }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form method="POST" action="{{ route('admin.products.destroy', $product) }}" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
