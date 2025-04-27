@extends('layouts.app')

@section('content')
<div class="container">
    <h1>✅ Checkout</h1>

    @if(count($cart))
        <ul class="list-group mb-3">
            @foreach($cart as $item)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $item['name'] }} x {{ $item['quantity'] }}
                    <span>${{ $item['price'] * $item['quantity'] }}</span>
                </li>
            @endforeach
            <li class="list-group-item d-flex justify-content-between">
                <strong>Total:</strong>
                <strong>${{ $total }}</strong>
            </li>
        </ul>
        <div class="alert alert-info">
            This is a mock checkout. No payment is processed.
        </div>
        <form action="{{ route('home') }}" method="GET">
            <button class="btn btn-primary">Place Mock Order</button>
        </form>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
