@extends('layouts.app')

@section('content')
<div class="container">
    <h1>🛒 Your Cart</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart))
    <table class="table">
        <thead>
            <tr>
                <th>Product</th><th>Price</th><th>Qty</th><th>Total</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $id => $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>
                    <form method="POST" action="{{ route('cart.update', $id) }}">
                        @csrf
                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 60px;">
                        <button class="btn btn-sm btn-primary">Update</button>
                    </form>
                </td>
                <td>${{ $item['price'] * $item['quantity'] }}</td>
                <td>
                    <form method="POST" action="{{ route('cart.remove', $id) }}">
                        @csrf
                        <button class="btn btn-sm btn-danger">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('cart.checkout') }}" class="btn btn-success">Proceed to Checkout</a>

    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
