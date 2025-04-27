@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Welcome to VeggieStore 🥦</h1>

    <div class="mb-3">
        <h5>Categories</h5>
        <ul class="list-inline">
            @foreach ($categories as $category)
                <li class="list-inline-item">
                    <a href="#" class="btn btn-outline-success btn-sm">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <img src="{{ $product->image ?? 'https://via.placeholder.com/300x200' }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p>${{ $product->price }}</p>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $products->links() }}
</div>
@endsection
