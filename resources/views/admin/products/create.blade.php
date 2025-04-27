@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ isset($product) ? 'Edit' : 'Add' }} Product</h2>

    <form method="POST" action="{{ isset($product) ? route('admin.products.update', $product) : route('admin.products.store') }}">
        @csrf
        @if(isset($product)) @method('PUT') @endif

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ (old('category_id', $product->category_id ?? '') == $cat->id) ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" step="0.01" class="form-control" value="{{ old('price', $product->price ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label>Image URL (optional)</label>
            <input type="url" name="image" class="form-control" value="{{ old('image', $product->image ?? '') }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">{{ isset($product) ? 'Update' : 'Add' }} Product</button>
    </form>
</div>
@endsection
