@extends('layouts.app')

@section('content')
<div class="container">
    <h2>📊 Admin Dashboard</h2>

    <!-- Links to manage products and categories -->
    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-primary me-2">Manage Products</a>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">Manage Categories</a>

    <!-- Admin Stats Section -->
    <div class="mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Total Products</h5>
                    </div>
                    <div class="card-body">
                        <p>{{ $totalProducts }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Total Categories</h5>
                    </div>
                    <div class="card-body">
                        <p>{{ $totalCategories }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
